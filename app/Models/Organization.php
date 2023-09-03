<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_name',
        'description',
        'logo',
        'address_id',
        'website',
        'is_public',
        'is_visible',
    ];


        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
