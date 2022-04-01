<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'description',
        'country',
        'city',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function getEmailAttribute()
    {
        return $this->user->email;
    }

    public function getImageUrlAttribute()
    {
        $image = $this->user->image;
        if ($image) {
            return asset('images/employees/' . $image);
        }
        return asset('images/default_user.png');
    }
}
