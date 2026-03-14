<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MessageController extends Controller
{

public function index()
{
$messages = session()->get('messages', []);
return view('message-board', compact('messages'));
}

public function store(Request $request)
{

$request->validate([
'name' => 'required',
'number' => 'required|numeric',
'message' => 'required'
]);

$messages = session()->get('messages', []);

$messages[] = [
'name' => $request->name,
'number' => $request->number,
'message' => $request->message
];

session()->flash('messages', $messages);

return redirect('/');
}

}