<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application_form extends Model
{
    use HasFactory;

    protected $table = 'application_form';

    protected $fillable = [
     'user_id',
     'job_id',
    ];

    public function job()
{
    return $this->belongsTo(Job::class, 'id');
}
}
