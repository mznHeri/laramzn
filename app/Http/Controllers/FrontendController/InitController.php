<?php 
namespace App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendController\ExtendcController;
use Illuminate\Http\Request;
  
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
  
class InitController extends ExtendcController
{

    public function index(Request $request)
    {
        return view("frontend.template.$this->template.index", array(
            'template' => $this->template,
            'path' => $this->path
        ));
    }


    
}