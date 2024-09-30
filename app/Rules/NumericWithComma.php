<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NumericWithComma implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[0-9]+(?:,[0-9]{3})*(\,[0-9]{2})?$/', $value);
    }

    public function message()
    {
        return [
            'price.regex' => 'Wartość musi składać się tylko z cyfr. Można użyć przecinka do oddzielenia setnych.',
        ];
    }
}
