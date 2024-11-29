<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            return view('Admin.home');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.pages.whatwebelieve');       
    }

    public function leadership_team()
    {
        return view('user.pages.leadership_team');       
    }

    public function ministries()
    {
        return view('user.pages.ministries&departments');       
    }

    public function events()
    {
        return view('user.pages.events');       
    }

    public function sermons()
    {
        return view('user.pages.sermons');       
    }
}
