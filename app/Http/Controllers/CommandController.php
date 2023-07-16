<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CommandRequest;
use App\Models\Command;
class CommandController extends Controller
{
    
    public function showCategories(){
        $categories = Category::all();
        return view('cmdcat', compact('categories'));
    }
    
    public function show($id) {
        $commands = Command::where('category_id', $id)->get();
        return view("cmdcatid", compact('commands'));
    }

    public function showForm() {
        $categories = Category::all();
        return view('cmdaddnote', compact('categories'));
    }
    public function showUpdateForm() {
        return "not implemented";
    }
    public function post(CommandRequest $request) {
        $validated = $request->validated();
        $command = new Command();
        $category = Category::findOrFail($validated['category_id']);
        // $commandText = '```sh' . $validated['command'] . '```';
        // $command->command = Str::markdown($commandText);
        $command->command = $validated['command'] ;
        $command->description = $validated['description'];
        // $command->associate($category);
        $command->category_id = $validated['category_id'];
        $command->save();
        return redirect('/');

    }
    public function update() {
        return "not implemented";
    }
    public function destroy($id) {
        $command = Command::findOrFail($id);
        $command->delete();
        return redirect('/');
    }
}
