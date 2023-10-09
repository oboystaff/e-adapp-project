<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Farmer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public static function generateFingerPrintFileName()
    {
        $fileName = Str::random();
        while (self::where('image', $fileName)->first()) {
            self::generateFingerPrintFileName();
        }

        return $fileName;
    }
}
