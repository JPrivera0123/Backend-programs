<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function fibonacci(){
    return view('index');

  }


  public function palindrome(){
    return view('palindrome');

    }

    public function numsort(){
    return view('numsort');

    }


    public function anagram(){
    return view('anagram');

    }

}
