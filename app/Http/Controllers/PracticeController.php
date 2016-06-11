<?php

namespace MemGame\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PracticeController extends Controller
{
  //=============================================
  public function getEx2() {
    print 'ext1: test DB Model'.'<br>';
    $images = DB::table('images')->where('number','>', 1)->get();
    foreach ($images as $image) {
      echo $image->file_name.'<br>';
    }
  }
  //=============================================
  public function getEx1() {
    print 'ext1: test DB Query Builder'.'<br>';
    $images = DB::table('images')->get();
    foreach ($images as $image) {
      echo $image->file_name.'<br>';
    }
  }
}
