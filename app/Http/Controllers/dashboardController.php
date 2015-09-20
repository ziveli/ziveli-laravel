<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function getIndex() {
    	return view('dashboard.index');
    }

    public function getLogin() {
    	return view('auth.login');
    }

    public function getSignup() {
    	return view('auth.signup');
    }
}
