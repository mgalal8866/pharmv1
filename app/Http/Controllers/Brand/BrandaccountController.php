<?php

namespace App\Http\Controllers\Brand;
use App\Models\Brandaccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BrandaccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(View::exists('brands.login'))
        {
            return view('brands.login');
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brandaccount  $brandaccount
     * @return \Illuminate\Http\Response
     */
    public function show(Brandaccount $brandaccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brandaccount  $brandaccount
     * @return \Illuminate\Http\Response
     */
    public function edit(Brandaccount $brandaccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brandaccount  $brandaccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brandaccount $brandaccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brandaccount  $brandaccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brandaccount $brandaccount)
    {
        //
    }
}
