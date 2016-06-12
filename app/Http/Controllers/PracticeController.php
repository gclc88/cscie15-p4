<?php

namespace MemGame\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PracticeController extends Controller
{

  //=============================================
  // Get all images for an owner
    public function getEx7() {
    $images = \MemGame\Image::where('owner_id', '=', 1)->orderby('number')->get();
    echo $images.'<br>';

    foreach ($images as $image) {
      echo $image->file_name.'<br>';
    }

  }

  //=============================================
  // Delete image
    public function getEx6() {
    $image = \MemGame\Image::where('owner_id', '=', 1)->where('number', '=', 1)->first();

    # If we found the Image, update it
    if($image) {

        # Delete the record
        $image->delete();
        echo "Delete complete; check the database to see if your update worked...";
    }
    else {
        echo "Image not found, can't delete.";
    }
  }
  //=============================================
  // Update image
    public function getEx5() {
    $image = \MemGame\Image::where('owner_id', '=', 1)->where('number', '=', 1)->first();

    # If we found the Image, update it
    if($image) {

        # Give it a different title
        $image->file_name = 'MyNumber1.jpg';

        # Save the changes
        $image->save();

        echo "Update complete; check the database to see if your update worked...";
    }
    else {
        echo "Image not found, can't update.";
    }
  }
  //=============================================
  // Get all images
  public function getEx4() {
    $images = \MemGame\Image::all();
    if(!$images->isEmpty()) {

        // Output the Images
        foreach($images as $image) {
            echo $image->file_name.'<br>';
        }
    }
    else {
        echo 'No Image found';
    }
  }
  //=============================================
  // Add new image
  public function getEx3() {
    $image = new \MemGame\Image();

    # Set the parameters
    # Note how each parameter corresponds to a field in the table
    $image->owner_id = 1;
    $image->number = 1;
    $image->file_name = 'number1.jpg';

    # Invoke the Eloquent save() method
    # This will generate a new row in the `Images` table, with the above data
    $image->save();

    echo 'Added: '.$image->file_name;
  }
  //=============================================
  public function getEx2() {
    print 'ext2: test DB Query Builder'.'<br>';
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
