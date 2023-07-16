<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LangRequest;

class LangController extends Controller
{
    public function showAddForm()
    {
        return view('langadd');
    }

    public function create(LangRequest $request)
    {
        return "not implemented";
    }
}
