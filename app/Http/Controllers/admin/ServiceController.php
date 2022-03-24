<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

class ServiceController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminName = User::where('role', '=', 'admin')->get();

        $services = Service::all();
        return view('admin.servicess.index', compact('services', 'adminName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminName = User::where('role', '=', 'admin')->get();
        $categories = Category::all();
        return view('admin.servicess.create', compact('categories', 'adminName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|min:2',

        ]);


        Service::create([
            'service_name' => $request->service_name,
            'price' => $request->price,
            'category_id' => $request->category_id,

        ]);
        // ->categories()->attach([$request->category_id]);
        $request->flash();
        session()->flash('success', 'Your services added successfully.');
        return redirect('servicess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminName = User::where('role', '=', 'admin')->get();
        $categories = Category::all();

        $service = Service::findOrFail($id);
        // dd($service);
        return view('admin.Servicess.edit', compact('service', 'categories', 'adminName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = Service::findOrFail($id);

        $services->service_name = $request->input('service_name');
        $services->price = $request->input('price');
        $services->category_id = $request->input('category_id');


        $services->update();




        $request->flash();
        session()->flash('success', 'Your service updated successfully.');
        return redirect('servicess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $service = Service::find($id);
        $service->delete();
        $request->flash();
        session()->flash('success', 'Your Service delete successfully.');
        return redirect('servicess');
    }
}
