<?php

namespace MemGame\Http\Controllers;

use MemGame\Http\Controllers\Controller;

class GameController extends Controller{
	public function getImage($id) {
		return '<img src="/images/'.$id.'-bg.jpg" alt="flowers">';
	}
}
