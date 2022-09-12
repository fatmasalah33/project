<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
class CatController extends Controller
{
    public function index(){
        $data['cats']=Cat::get();
        return view('admin.cats.index')->with($data);
    }
}
