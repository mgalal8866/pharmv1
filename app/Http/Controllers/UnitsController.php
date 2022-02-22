<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class UnitsController extends Controller
{
    // use WithPagination;
        public function index(){

            return view('admin.unit.view');
        }
}
