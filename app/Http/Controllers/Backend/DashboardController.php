<?php

namespace App\Http\Controllers\Backend;


class DashboardControllder extends Controller {
  public function index(){
    return View('backend.dashboard');
  }
}
