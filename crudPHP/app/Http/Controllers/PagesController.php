<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

  public function getIndex(){
    return view('pages.teste');
  }

  public function getContact(){
    return view('pages.contact');
  }

  public function getAbout(){
    $companyName = "Code Executable Inc";
    $isUserRegistered = false;

    $users = array("Renato", "Erik", "John", "Samantha");

    return view('pages.about')
      ->with("companyName", $companyName)
      ->with("isUserRegistered", $isUserRegistered)
      ->with("users", $users);
  }

  public function getHelp(){
    return view('pages.help');
  }
}
