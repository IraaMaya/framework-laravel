<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{

    public function index (Request $request)
{
    // method path()
    $path = $request->path();
    echo 'Method path(): '. $path. "<br>";

    //method is()
    $pattern = $request->is('admin/*');
    echo 'Method is(): '. $pattern. "<br>";
    
    //method url()
    $url = $request->url();
    echo 'Method url(): '. $url. "<br>";

    //method fullUrl()
    $fullUrl = $request->fullUrl();
    echo 'Method fullUrl(): '. $fullUrl. "<br>";

    // method method()
    $method = $request->method();
    echo 'Method method(): '. $method. "<br>";

    // method isMethat()
    if ($request->isMethod('post')) {
        echo 'ini method post';
        echo "<br>";
    }
    if ($request->isMethod('get')) {
        echo 'ini method get';
        echo "<br>";
    }
}
}