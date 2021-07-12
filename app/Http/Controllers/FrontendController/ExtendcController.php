<?php 
namespace App\Http\Controllers\FrontendController;
use App\Http\Controllers\Controller;
use App\Models\Config;

class ExtendcController extends Controller
{
    // Properties
    public $template = 'default';
    
    // Methods
    function __construct() {
        self::setTemplate();
    }

    function setTemplate() {
        $cektemplate = Config::where('meta_key', 'template_1')->first();
        if(isset($cektemplate->id_config))
            $template = $cektemplate->value_key;
        $this->template = $template;
    }

}