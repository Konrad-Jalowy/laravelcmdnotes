<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LangRequest;
use App\Models\Lang;

class LangController extends Controller
{
    public function showAddForm()
    {
        return view('langadd');
    }

    public function create(LangRequest $request)
    {
        $validated = $request->validated();
        $lang = new Lang();
        $lang->name = $validated['name'];
        $lang->save();
        return redirect('/');
    }
}
