<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\MyUser;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function index()
    {
        // $myUser = MyUser::all();
        $myUser = new MyUser;
        $a = DB::table('my_users')->where('name', 'masa')->value('email');
        $b = DB::table('my_users')->pluck('email');
        $myUser->test();
        $myUser = DB::table('my_users')->get();
        $sql = DB::table('my_users')->where('name', 'masa')->exists();
        // $sql = DB::table('my_users')->where('name', 'masa')->value('email');
        // $sql = DB::table('my_users')->find(7);
        // $titles = DB::table('my_users')->pluck('id', 'email');
        // $count = DB::table('my_users')->count();
        // $age = DB::table('my_users')->max('age');
        dump($sql);
        // exit;
        return view('myusers', ['myusers' => $myUser]);
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
        $myUser = new MyUser;
        
        $myUser->name = request('name');
        $myUser->age = request('age');
        $myUser->email = request('email');
        $myUser->save();
        return redirect('/myusers');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyUser  $myUser
     * @return \Illuminate\Http\Response
     */
    public function show(MyUser $myUser)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyUser  $myUser
     * @return \Illuminate\Http\Response
     */
    public function edit(MyUser $myUser)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyUser  $myUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyUser $myUser)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyUser  $myUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $myUser = MyUser::find($id);
        $myUser->delete();
        return redirect('/myusers'); 
    }

    public function test() {
        echo 'test';
        $url = route('testname');
        echo $url;
    }
}
