<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'country',
        'city',
        // 'locating',
        // 'found',
        // 'founding_date',
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    protected function getEmailAttribute() 
    {
        return $this->user->email;
    }

    public function getImageUrlAttribute(){
        $image = $this->user->image;
        if($image){
            return asset('images/'.$image);
        }
        return asset('images/default_user.png');
    }

}
