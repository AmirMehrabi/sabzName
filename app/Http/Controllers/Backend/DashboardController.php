<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

class DashboardControllder extends Controller {
  public function index(){
    return View('backend.dashboard');
  }
}
