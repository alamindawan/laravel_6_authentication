<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
class CustomerController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $level = 3;
        if (Auth::user()->level == 1) {
            $level = 2;
        }
        
        $targetArr = Customer::where('level',$level)->get();
//        echo '<pre>';
//        print_r($targetArr->toArray());exit;
        return view('customer/index')->with(compact('targetArr'));
    }

    public function create() {

        return view('customer/create');
    }

    public function store(Request $request) {
        $level = 3;
        if (Auth::user()->level == 1) {
            $level = 2;
        }

        $user = new Customer;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->level = $level;
        $user->save();
        
        $output = ['success' => 1];
        return response($output);
    }

}
