<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Users;

class  MidtermController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'created_at'=>now(),
            'update_at'=>now(),
        ]);

        $users = new Users([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'created_at'=>$request->get(),
            'update_at'=>$request->get(),
        ]);
        $users->save();
        return redirect('/users')->with('success', 'User saved!');
    }
    public function show($id)
    {
        // $contact = Task::where('id',$id)->get();
        // return view('contacts.index',compact('contact'));
    }

    public function edit($id)
    {
        $users = Users::find($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'created_at'=>'required',
            'update_at'=>'required',
        ]);

        $users = Users::findOrFail($id);
        $users->name =  $request->get('name');
        $users->email = $request->get('email');
        $users->phone = $request->get('phone');
        $users->created_at = $request->get('created_at');
        $users->update_at = $request->get('update_at');
        $users->save();

        return redirect('/');
    }
    public function destroy($id)
    {
       $users = Users::find($id);
        $users->delete();
       return redirect()->back();
    }




}