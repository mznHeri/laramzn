<?php 
namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ExtendbController extends Controller
{
     // Properties
     public $loginname      = 'logindashboardmzn';
     public $breadcrumbs    = '';

     // Methods
     public function __construct() {
         self::setLoginName();
         self::setBreadcrumbs();
     }
 
     public function setLoginName() {
         $cekLoginName = Config::where('meta_key', 'login_name')->first();
         if(isset($cekLoginName->id_config))
             $loginname = $cekLoginName->value_key;
         $this->loginname = $loginname;
     }

     public function setBreadcrumbs() {
        $basepath   = 'localhost/laravel8/backend/';
        $urlBasepath = Config::where('meta_key', 'url_base_path')->first();
        if(isset($urlBasepath->id_config))
             $basepath = $urlBasepath->value_key;
        $currenturl = str_replace('http://', '', url()->current());
        $currenturl = str_replace('https://', '', $currenturl);
        $currenturl = str_replace($basepath, '', $currenturl);
        $currenturl = explode('/', $currenturl);
        $this->breadcrumbs = json_encode($currenturl);
     }

     public function getLoginName() {
         return $this->loginname;
     }

}