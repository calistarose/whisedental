<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        dd('Route called');
        return view('home');
    }
 
    public function adminHome()
    {
        dd('Route called');
        return view('dashboard');
    }
}