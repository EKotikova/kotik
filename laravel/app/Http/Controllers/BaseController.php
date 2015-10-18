<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
 public function getIndex(){
  return view('page');
 }

public function getNews($id){
 return 'news';
} 


   //
}
