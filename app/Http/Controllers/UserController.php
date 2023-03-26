<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
    
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'user_date' => 'required',
        ]);
        $request['name'] = $request->name . ' ' . $request->surname;
        $request['user_date'] = date('Y-m-d H:i:s', strtotime($request->user_date));
        // dd($request);
        User::create($request->all());
        return redirect('user')->with('success','User updated successfully');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::find($user);
        $userNameArr = explode(' ', $user->name);
        $user->name = !empty($userNameArr[0]) ? $userNameArr[0] : '';
        $user->surname = !empty($userNameArr[1]) ? $userNameArr[1] : '';
        return view('users.show',compact('user'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = User::find($user);
        $userNameArr = explode(' ', $user->name);
        $user->surname = !empty($userNameArr[1]) ? $userNameArr[1] : '';

        return view('users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userId)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);
        $request['name'] = $request->name . ' ' . $request->surname;
        $request['user_date'] = date('Y-m-d H:i:s', strtotime($request->user_date));
        $user = User::find($userId);
        $res = $user->update($request->all());
        return redirect('user')->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();
        return redirect('user')->with('success','User deleted successfully');
    }
}
