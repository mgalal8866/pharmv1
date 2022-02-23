<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:الاقسام', ['only' => ['index']]);
    }
    public function index(){

        return view('admin.warehouse.view');
    }
}
