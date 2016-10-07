<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function __construct() {

    }

    public function getFaq() {
    	return view('pages.faq');
    }


}
