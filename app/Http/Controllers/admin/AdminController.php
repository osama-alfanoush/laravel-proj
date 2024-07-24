<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryRequest;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.home');
    }


    }

