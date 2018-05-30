<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
   /**
   * Создание нового экземпляра контроллера.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }
}
