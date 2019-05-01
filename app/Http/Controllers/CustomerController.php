<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showCustomers(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function add(Request $request){
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        return view('add', compact('name', 'email', 'address'));
    }

    public function delete($id){
        return view('delete', compact('id'));
    }

    public function destroy(Request $request){
        $id = $request->id;
        return view('destroy', compact('id'));
    }

    public function update($id){
        return view('update', compact('id'));
    }

    public function edit(){

    }
}
