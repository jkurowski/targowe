<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Translatable\HasTranslations;

class Investment extends Model
{

    use LogsActivity, HasTranslations;
    protected static $logName = 'Inwestycje';
    public $translatable = ['name', 'meta_description', 'meta_title'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'status',
        'name',
        'slug',
        'address',
        'city',
        'date_start',
        'date_end',
        'areas_amount',
        'area_range',
        'show_prices',
        'office_address',
        'meta_title',
        'meta_description',
        'meta_robots',
        'entry_content',
        'content',
        'end_content',
        'file_thumb',
        'file_brochure',
        'inv_province',
        'inv_county',
        'inv_municipality',
        'inv_city',
        'inv_street',
        'inv_property_number',
        'inv_postal_code',
        'company_id',
        'sale_point_id',
    ];

    /**
     * Get investment plan
     * @return HasOne
     */
    public function plan(): HasOne
    {
        return $this->hasOne('App\Models\Plan');
    }

    /**
     * Get investment floors
     * @return HasMany
     */
    public function floors(): HasMany
    {
        return $this->hasMany('App\Models\Floor')->orderBy('position');
    }

    /**
     * Get investment garages
     * @return HasMany
     */
    public function garages(): HasMany
    {
        return $this->hasMany('App\Models\Floor')->orderByDesc('position')->where('type', '=', 4);
    }

    /**
     * Get investment floor
     * @return HasOne
     */
    public function floor(): HasOne
    {
        return $this->hasOne('App\Models\Floor');
    }

    /**
     * Get flats belonging to the floors of the investment
     * @return HasManyThrough
     */
    public function floorRooms(): HasManyThrough
    {
        return $this->hasManyThrough(
            'App\Models\Property',
            'App\Models\Floor',
            'investment_id',
            'floor_id',
            'id',
            'id'
        )->with(['investment' => function ($query) {
            $query->select('id', 'show_prices');
        }]);
    }

    /**
     * Get investment building
     * @return HasOne
     */
    public function building(): HasOne
    {
        return $this->hasOne('App\Models\Building');
    }

    /**
     * Get investment buildings
     * @return HasMany
     */
    public function buildings(): HasMany
    {
        return $this->hasMany('App\Models\Building');
    }

    /**
     * Get investment floors
     * @return HasMany
     */
    public function buildingFloors(): HasMany
    {
        return $this->hasMany('App\Models\Floor');
    }

    /**
     * Get flats belonging to the floors of the investment
     * @return HasManyThrough
     */
    public function buildingRooms(): HasManyThrough
    {
        return $this->hasManyThrough(
            'App\Models\Property',
            'App\Models\Building',
            'investment_id',
            'building_id',
            'id',
            'id'
        );
    }

    /**
     * Get investment properties
     * @return HasMany
     */
    public function properties(): HasMany
    {
        return $this->hasMany('App\Models\Property');
    }

    /**
     * Get investment properties
     * @return HasMany
     */
    public function searchProperties(): HasMany
    {
        return $this->hasMany('App\Models\Property')->select(['investment_id', 'name', 'status', 'rooms', 'area', 'views', 'active', 'updated_at']);
    }

    // API
    public function activeProperties(): HasMany
    {
        return $this->hasMany('App\Models\Property')->where('status', 1);
    }

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InvestmentCompany::class);
    }

    public function salePoint(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InvestmentSalePoint::class);
    }


    /**
     * The "boot" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::deleting(function ($investment) {
            $investment->floors()->each(function($floor) {
                $floor->delete();
            });

            $investment->buildings()->each(function($building) {
                $building->delete();
            });

            $investment->properties()->each(function($property) {
                $property->delete();
            });
        });
    }
}
