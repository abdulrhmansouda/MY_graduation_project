<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use App\Models\UserBlock;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    
    public function companies(){
        return view('admin.companies')
        ->with('companies',Company::with('user','user.block')->get());
    }

    public function company_show(Company $company){
        dd($company);
    }

    public function user_block(User $user){
        if($user->isBlocked()){
            $user->block()->delete();
        }else{
            $user->block()->save(new UserBlock());
        }
        return redirect()->back();
    }
}
