<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'name',
        'CEO',
        'logo',
        'website',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function idols()
    {
        return $this->hasMany(Idol::class);
    }

    // ini accessor dengan cara baru
    // protected function logo(): Attribute
    // {
    //     return Attribute::get(function ($value) {
    //         if (filter_var($value, FILTER_VALIDATE_URL)) {
    //             return $value; // Jika sudah URL penuh
    //         }

    //         return asset('storage/' . $value); // storage/logos/namafile.jpg
    //     });
    // }

    // ini accessor dengan cara lama
    public function getLogoAttribute($value)
    {
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value; // Sudah berupa URL penuh
        }

        return asset('storage/' . $value);
    }

}
