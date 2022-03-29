<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
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
            return asset('images/admins/' . $image);
        }
        return asset('images/default_user.png');
    }
}
