<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 2018/11/8
 * Time: 下午 09:00
 */
namespace App\Http\Controllers;
class HomeController extends Controller{
public function index(){
    return view('home.index');
}
}
