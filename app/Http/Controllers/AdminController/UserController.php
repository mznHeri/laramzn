<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController\ExtendbController;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends ExtendbController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = '<i class="fas fa-user"></i> Users';
        // ============================ //
        
        $users = User::get();
        
        return view('admin.users.index', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'datas'         => $users
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = '<i class="fas fa-user"></i> Create Users';
        // ============================ //
            
        return view('admin.users.create', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cekusername = User::where('username', $request->username)->orWhere('email', $request->email)->count();
        if($cekusername != 0) {
            $message = "Duplicate Username or Email !!!";
            Session::flash('message', $message);
            return Redirect::back()->withErrors(array('name' => $message));
        }

        $user = new User;
        $validator = Validator::make($request->all(), 
            $user->rules
        );

        if($validator->fails()) {
            return Redirect::to('dashboard/user/create')->withErrors($validator)->withInput($request->input());
        }

        $user->name             = $request->name;
        $user->username         = $request->username;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->role             = $request->role;
        $user->active           = $request->active;
        $user->create_by        = Auth::user()->id;;
        $user->create_by        = Auth::user()->id;;
        $user->created_at       = date('Y-m-d H:i:s');
        $user->updated_at       = date('Y-m-d H:i:s');
        $user->remember_token   = '9CDSd1reiiJjWxZ1IJmjRDeyPju3AAeTKHZETIXfWuwGmegv2QJ9Guusu3RG';
        $user->save();
        Session::flash('message', 'User has been added');
        return redirect('dashboard/users');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->active = 1;
        if($request->flag == 1) {
            $user->active = 0;
            Session::flash('message', 'User has been active');
        } else {
            Session::flash('message', 'User has been delete');
        }
        $user->save();
        
        return redirect('dashboard/users');    
    }
}
