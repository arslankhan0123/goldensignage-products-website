<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminDetail extends Model
{
    protected static function booted()
    {
        $clearCache = function () {
            \Illuminate\Support\Facades\Cache::forget('admin_details');
            \Illuminate\Support\Facades\Cache::forget('footer_categories');
        };

        static::saved($clearCache);
        static::deleted($clearCache);
    }
}
