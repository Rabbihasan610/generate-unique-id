<?php

namespace Hasan\LaravelUniqueId;


class UniqueId
{
    public static function generate($model)
    {
        // Desired length for the padded ID
        $desiredLength = config('laravel-unique-id.desired_length');

        // Convert the customer ID to a string and pad it with zeros
        $paddedId = str_pad((string)$model, $desiredLength, '0', STR_PAD_LEFT);

        return $paddedId;
    }
}
