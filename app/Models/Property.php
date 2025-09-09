<?php

namespace App\Models;

use App\Helpers\PropertyAreaTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Property extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'building_id',
        'floor_id',
        'status',
        'name',
        'name_list',
        'number',
        'number_order',
        'rooms',
        'area',
        'area_search',
        'price',
        'price_brutto',
        'price_30',
        'vat',
        'bank_account',
        'garden_area',
        'balcony_area',
        'balcony_area_2',
        'terrace_area',
        'loggia_area',
        'parking_space',
        'garage',
        'window',
        'view_3d',
        'view_360',
        'type',
        'apartment_type',
        'specialoffer',
        'specialoffer_text',
        'garage_text',
        'safe_loan',
        'html',
        'cords',
        'file',
        'file_pdf',
        'file_webp',
        'meta_title',
        'meta_description',
        'views',
        'active',
        'highlighted',
        'promotion_end_date',
        'promotion_price',
        'promotion_price_show',
        'client_id',
        'saled_at',
        'reservation_until',
        'visitor_related_type',
        'text',
        'history_info'
    ];

    /**
     * Get next property
     * @param int|null $floor_id
     * @param int $investment
     * @param int $number_order
     * @return Property
     */
    public static function findNext(?int $floor_id, ?int $status, int $investment, int $number_order)
    {
        $query = self::where('investment_id', $investment)
            ->orderBy('number_order', 'ASC')
            ->where('number_order', '>', $number_order)
            ->select(['number_order', 'id', 'investment_id', 'floor_id', 'name']);
        if ($floor_id) {
            $query->where('floor_id', $floor_id);
        }
        if ($status) {
            $query->where('status', $status);
        }

        $query->where('active', '=', 1);
        return $query->first();
    }

    /**
     * Get previous property
     * @param int|null $floor_id
     * @param int $investment
     * @param int $number_order
     * @return Property
     */
    public static function findPrev(?int $floor_id, ?int $status, int $investment, int $number_order)
    {
        $query = self::where('investment_id', $investment)
            ->orderBy('number_order', 'DESC')
            ->where('number_order', '<', $number_order)
            ->select(['number_order', 'id', 'investment_id', 'floor_id', 'name']);
        if ($floor_id) {
            $query->where('floor_id', $floor_id);
        }
        if ($status) {
            $query->where('status', $status);
        }

        $query->where('active', '=', 1);
        return $query->first();
    }

    /**
     * Get notifications for room
     * @return HasMany
     */
    public function roomsNotifications(): HasMany
    {
        return $this->hasMany(
            'App\Models\Notification',
            'notifiable_id',
            'id'
        )->where('notifiable_type', 'App\Models\Property')->latest();
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function getLocation(): string
    {
        $buildingName = $this->building ? $this->building->name : null;
        $floorName = $this->floor ? $this->floor->name : null;

        if ($buildingName && $floorName) {
            return "{$buildingName} - {$floorName}";
        } elseif ($floorName) {
            return "{$floorName}";
        }

        return 'Brak lokalizacji'; // Fallback if no building or floor is set
    }

    public function priceComponents()
    {
        return $this->belongsToMany(PropertyPriceComponent::class, 'property_price_component_property')
            ->withPivot('value', 'value_m2', 'category')
            ->withTimestamps();
    }

    public function relatedProperties()
    {
        return $this->belongsToMany(Property::class, 'property_property', 'property_id', 'related_property_id');
    }

    public function investment()
    {
        return $this->belongsTo('App\Models\Investment');
    }
    // API

    public function getRelatedTypesAttribute()
    {
        $types = $this->relatedProperties
            ->pluck('type')
            ->map(fn ($type) => PropertyAreaTypes::getStatusText($type) ?? 'X')
            ->unique()
            ->values();

        return $types->isNotEmpty()
            ? $types->implode(', ')
            : 'X';
    }

    public function getRelatedNumbersAttribute()
    {
        $numbers = $this->relatedProperties
            ->pluck('number')
            ->filter()
            ->values();

        return $numbers->isNotEmpty()
            ? $numbers->implode(', ')
            : 'X';
    }

    public function getRelatedPricesAttribute()
    {
        $prices = $this->relatedProperties->map(function ($property) {
            return ($property->type == 1 && $property->price_brutto)
                ? $property->price_brutto
                : null;
        })->filter()->values();

        return $prices->isNotEmpty()
            ? $prices->implode(', ')
            : 'X';
    }

    public function getTotalWithRelatedPriceAttribute()
    {
        if ($this->type != 1) {
            return 'X';
        }

        return (float)$this->price
            + $this->relatedProperties->sum(function ($prop) {
                return (float)$prop->price;
            });
    }

    public function getDisplayPriceAttribute()
    {
        return ($this->type == 1 && $this->price)
            ? $this->price
            : 'X';
    }
//    public static function boot()
//    {
//        parent::boot();
//        self::deleting(function ($property) {
//
//        });
//    }
}
