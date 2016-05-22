<?php

namespace MemGame\Http\Controllers;

use MemGame\Http\Controllers\Controller;

class GameController extends Controller{
	public function getImage($id) {
		return '<img src="/images/'.$id.'.jpg" alt="flowers" style="opacity:0.4">';
	}
}
