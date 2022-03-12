<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        // dd($services);


        return view('layouts.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nails()
    {
        // Service::find()->where('category_id'==2);
      $services= DB::table('services')->where('category_id', '2')->get();

        // dd($services);


        return view('layouts.gallery.nails',compact('services'));
    }
    public function hair()
    {

      $services= DB::table('services')->where('category_id', '1')->get();

        // dd($services);


        return view('layouts.gallery.hair',compact('services'));
    }
    public function bridal()
    {

      $services= DB::table('services')->where('category_id', '3')->get();

        // dd($services);


        return view('layouts.gallery.bridal',compact('services'));
    }
    public function face()
    {

      $services= DB::table('services')->where('category_id', '4')->get();




        return view('layouts.gallery.face',compact('services'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
