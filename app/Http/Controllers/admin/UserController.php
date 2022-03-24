<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminName = User::where('role', '=', 'admin')->get();
        $users = User::all();

        return view('admin.users.index', compact('users', 'adminName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $adminName = User::where('role', '=', 'admin')->get();
        return view('admin.users.create', compact('adminName'));
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
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'mobile_number' => 'max:10',
        ]);
        $password = Hash::make($request->password);
        // $decrypted = Crypt::decrypt($password);
        // dd($password);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role' => $request->role,
            'mobile_number' => $request->mobile_number
        ]);
        $request->flash();
        session()->flash('success', 'Your user added successfully.');
        return redirect('users');
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
        $adminName = User::where('role', '=', 'admin')->get();
        $user = User::find($id);


        return view('admin.users.edit', compact('user', 'adminName'));
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
        if ($request->password != null) {
            $password = Hash::make($request->password);
            $request->validate([
                'name' => 'required|min:2',

                'password' => 'min:8',
                'mobile_number' => 'max:10',
            ]);
            $user = User::find($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'mobile_number' => $request->mobile_number,
                'role' => $request->role
            ]);
            $request->flash();
            session()->flash('success', 'Your user updated successfully.');
            return redirect('users');
        }

        $request->validate([
            'name' => 'required|min:2',
            'mobile_number' => 'max:10',
        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'role' => $request->role
        ]);
        $request->flash();
        session()->flash('success', 'Your user updated successfully.');
        return redirect('users');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $user = User::find($id);
        $user->delete();
        $request->flash();
        session()->flash('success', 'Your user delete successfully.');
        return redirect('users');
    }
}
