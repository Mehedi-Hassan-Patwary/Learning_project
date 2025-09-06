<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updateUser(Request $request, string $id)
    {
        $user = DB::table('users')->where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'city' => $request->input('city'),
        ]);
        return redirect('/')->with('success', 'User updated successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users =DB::table('users')->simplePaginate(3);
        // return $users;
        //dd($users);
        // return view('user.show', compact('users'));
        return view('allusers', ['data' => $users]);

    }
        public function singleUser(string $id)
            {
                $users = DB::table('users')->where('id', $id)->get();
                return  view('user', ['data' => $users]);
            }

    /**
     * Show the form for editing the specified resource.
     */
    public function addUser(Request $request)
    {
        $users = DB::table('users')
                        ->insert([
                            'name' => $request->input('name'),
                            'email' => $request->input('email'),
                            'age' => $request->input('age'),
                            'city' => $request->input('city'),

                        ]);
    }




    /**
     * Update the specified resource in storage.
     */
    public function updatePage( string $id)
    {
        //$user = DB::table('users')->where('id', $id)->get();
        $user = DB::table('users')->find($id);
         return view('updateuser', ['data' => $user]);
        //return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
