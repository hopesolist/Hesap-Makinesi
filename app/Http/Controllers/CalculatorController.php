<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        $result = null;
        return view('calculator', compact('result'));
    }
    public function topla(Request $request)
    {
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=$num1+$num2;
        return view('calculator', compact('result'));
    }
    public function cikar(Request $request)
    {
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=$num1-$num2;
        return view('calculator', compact('result'));
    }
    public function bol(Request $request)
    {
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=$num1/$num2;
        return view('calculator', compact('result'));
    }
    public function carp(Request $request)
    {
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=$num1*$num2;
        return view('calculator', compact('result'));
    }
}
