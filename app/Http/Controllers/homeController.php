<?php
//que es un namespace 

namespace App\Http\Controllers; //direcion donde se encuentra 

use Illuminate\Http\Request;

class homeController extends Controller
{
 public function __invoke()
 {
   return view("home"); //herper

 }

 }

