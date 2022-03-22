<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Service_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('layouts.book', compact('services'));
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
    public function store(Request $request ,Service $service)
    {
        if (Auth::check()) {

            $services = Service::with('users')->get();
            // dd($services);
            $error = false;
            foreach ($services as $oneservice) {

                foreach ($oneservice['users'] as $reservations) {

                    $date = $reservations['pivot']->date;

                    $time = $reservations['pivot']->time;
                    $service_id = $reservations['pivot']->service_id;

                    if ($request->date == $date && $request->time == $time && $request->service_name == $service_id) {
                        // $error=true;
                        $request->flash();
                        session()->flash('success', 'this Reservation
                    is already booked.');
                        return redirect()->back();
                    }
                }
            }
            if (!$error) {
                $service = Service::find($request->service_name);
                $id = Auth::user()->id;
                $service->users()->attach(
                    $id,
                    [
                        'mobile_number' => $request->mobile_number,

                        'time' => $request->time,
                        'date' => $request->date,
                        'note' => $request->note,
                       'service_name'=>$request->service_name,


                    ]
                );
                $request->flash();
                session()->flash('success', 'Thank you ..you can check your profile to know your Reservation
       status.');
                return redirect()->back();
            }
        } else {
            return redirect('/login');
        }
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
