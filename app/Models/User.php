<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with =[
        'admin',
        'company',
        'employee',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function employee(){
        return $this->hasOne(Employee::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function numbers(){
        return $this->hasMany(Number::class);
    }

    public function isAdmin(){
        return $this->role === 'admin';
    }

    public function isCompany(){
        return $this->role === 'company';
    }

    public function isEmployee(){
        return $this->role === 'employee';
    }

    public function block(){
        return $this->hasOne(UserBlock::class);
    }

    public function isBlocked(){
        return $this->block !== null;
    }

    public function getNameAttribute(){
        
        switch($this->role){
            case 'admin': $name = $this->admin->first_name.' '.$this->admin->last_name.' || Admin'; break;
            case 'employee': $name = $this->employee->first_name.' '.$this->employee->last_name.' || Employee'; break;
            case 'company' : $name = $this->company->name.' || Company';break;
        }
        return $name;
    }


}
