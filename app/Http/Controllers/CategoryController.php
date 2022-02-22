<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    // use WithPagination;
    public function index(){

        return view('admin.category.view');
    }
}
