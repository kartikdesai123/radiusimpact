<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        $data['title'] = 'Radius Impact - Portfolio';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('portfolio.js');
        $data['funinit'] = array('Portfolio.init()');
        return view('frontend.pages.portfolio.portfolio', $data);
    }

}
