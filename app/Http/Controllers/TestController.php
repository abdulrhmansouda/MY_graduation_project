<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBlock;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $block = new UserBlock;
        $block->user_id = 1;
        $block->save();

        dd(auth()->user()->isBlocked());

    }
}
