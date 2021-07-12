<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\AdminController\ExtendbController;
use App\Models\Config;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ConfigController extends ExtendbController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = '<i class="fas fa-cog"></i> Config';
        // ============================ //
        
        $config = Config::get();
        
        return view('admin.config.index', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'datas'         => $config
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
        $title = '<i class="fas fa-cog"></i> Create Config';
        // ============================ //
            
        return view('admin.config.create', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'data'          => ''
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
       
        $config = new Config;
        $config->meta_key       = $request->meta_key;
        $config->value_key      = $request->meta_value;
        $config->ket            = $request->info;
        $config->created_by     = Auth::user()->id;
        $config->update_by      = Auth::user()->id;
        $config->created_date   = date('Y-m-d H:i:s');
        $config->update_date   = date('Y-m-d H:i:s');
        $config->save();
        Session::flash('message', 'Config has been added');
        return redirect('dashboard/config');    
    }

    public function view($id)
    {
        $config = Config::find($id);
        $breadcrumbs = $this->breadcrumbs;
        $title = '<i class="fas fa-cog"></i> View Config';
        // ============================ //
            
        return view('admin.config.view', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'data'          => $config,
            'id'            => $id
        ));
    }

    public function edit($id)
    {
        $config = Config::find($id);
        $breadcrumbs = $this->breadcrumbs;
        $title = '<i class="fas fa-cog"></i> Edit Config';
        // ============================ //
            
        return view('admin.config.edit', array(
            'breadcrumbs'   => $breadcrumbs,
            'title'         => $title,
            'data'          => $config,
            'id'            => $id
        ));
    }

 
    public function update(Request $request, $id)
    {
        $config = Config::find($id);
        $config->meta_key       = $request->meta_key;
        $config->value_key      = $request->meta_value;
        $config->ket            = $request->info;
        $config->update_by      = Auth::user()->id;
        $config->update_date    = date('Y-m-d H:i:s');
        $config->save();
        Session::flash('message', 'Config has been updated');
        return redirect('dashboard/config');    
    }

    public function delete(Request $request, $id)
    {
        $config = Config::find($id);
        $config->delete_flag = 1;
        if($request->flag == 1) {
            $config->delete_flag = 0;
            Session::flash('message', 'Config has been active');
        } else {
            Session::flash('message', 'Config has been delete');
        }
        $config->save();
        
        return redirect('dashboard/config');    
    }
}
