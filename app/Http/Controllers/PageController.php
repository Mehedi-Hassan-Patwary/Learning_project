<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function ShowUser(){
            return view("welcome"); // Adjust the view name as needed
        }
}
