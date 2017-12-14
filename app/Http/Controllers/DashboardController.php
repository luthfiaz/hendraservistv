<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function gallery()
    {
    	$user = Auth::user();

    	if ( $user )
    	{
    		return view('gallery.index');

    	} else return back();
    }
}
