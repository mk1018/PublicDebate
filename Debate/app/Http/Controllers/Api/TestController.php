<?php

namespace App\Http\Controllers\Api;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return Topic::all();
    }
}
