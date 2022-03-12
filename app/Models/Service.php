<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'price',
        'category_id',

    ];
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'services_users')
            ->withPivot('id')
            ->withPivot('mobile_number')
            ->withPivot('service_name')
            ->withPivot('status')
            ->withPivot('date')
            ->withPivot('time')
            ->withPivot('note');
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}

