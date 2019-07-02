<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function get_form(){
        return view('form');
    }
    public function post_form(Request $request){
        $birinci = $request->birinci;
        $ikinci = $request->ikinci;
        $toplam = $birinci + $ikinci;
        return view('form')->with('toplam',$toplam);
    }
}