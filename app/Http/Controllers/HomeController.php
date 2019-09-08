<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class HomeController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        echo 111;exit;
    }

}
