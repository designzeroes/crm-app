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
        'address',
        'website',
        'is_public',
        'is_visible',
    ];


        public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function job()
    {
        return $this->hasMany(Job::class, 'organization_id');
    }

}
