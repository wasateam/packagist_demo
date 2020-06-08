<?php

namespace Wasateam\Packagistdemo;

use App\Http\Controllers\Controller;

class DemoClass extends Controller
{
  public static function test()
  {
    error_log('aaaa');
  }
}
