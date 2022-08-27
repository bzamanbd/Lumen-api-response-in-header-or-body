<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MemberController extends Controller{

 function index($name){
  return response($name)
   ->header('name',$name)
   ->header('age','25')
   ->header('city','dhaka');
 }

}