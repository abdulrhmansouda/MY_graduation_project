<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $with = [
        'user',
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function getImageUrlAttribute(){
        $image = $this->image;
        if($image){
            return asset('/images/'.$image);
        }
        return asset('images/default_post.png');
    }
}
