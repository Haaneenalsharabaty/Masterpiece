<?php


namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('services')->where('role', 'user')->get();
        $adminName = User::where('role', '=', 'admin')->get();
        $allStatus = ['pending', 'accepted', 'rejected'];
        $allUsers = User::all();
        $allService = Service::all();
        $allcontact = Contact::all();
        $allCategory = Category::all();

        return view('admin.index', compact('allcontact', 'allUsers', 'users', 'allService', 'allCategory', 'allStatus', 'adminName'));
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
    public function update(Request $request, $userId, $pivotId)
    {
        $users = User::with('services')->where('role', 'user')->get();
        $user = $users->find($userId);

        $user->services()->wherePivot('id', '=', $pivotId)->updateExistingPivot($request->service_id, [
            "user_id" => $request->user_id,
            "service_id" => $request->service_id,
            "mobile_number" => $request->mobile_number,

            "status" => $request->status,
            "date" => $request->date,
            "time" => $request->time,
            "note" => $request->note
        ]);



        return redirect()->back();
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
