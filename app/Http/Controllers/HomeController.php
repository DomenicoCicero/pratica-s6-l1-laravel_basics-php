<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function allActivity() {
        return view('all activity');
    }

    public function createNewActivity() {
        return view('create new activity');
    }

    public function singleActivity() {
        return view('view single');
    }

    public function updateActivity() {
        return view('update activity');
    }
}
