<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Todo;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class Fontcontroller extends Controller
{
    public function index()
    {
        
     return view('welcome',);
        
    }
    public function contact()
    {
        
       return view('contact');
     
           
        
    }
    public function blog()
    {
        
       return view('blog');
     
           
        
    }
    public function add()
    {
        
       return view('add');
     
           
        
    }
    public function post(Request $request)
    {
      $request->validate([
         "*"=> "required",
         "email"=> "email"
      ]); 
      
    Profile::insert([
      "name" =>$request->name,
      "email" =>$request->email,
      "phone_number" =>$request->phone,
      "created_at" => Carbon::now(),

    ]);
    return back()->with('Success', "data insert") ;
        
    }
    public function list()

    {
      $profiles = Profile::all();
       return view('list', compact('profiles'));
     
           
        
    }
    public function edit($id)

    {
      $data_edit=Profile::find($id);
     return view('edit',compact('data_edit'));
           
        
    }
    public function update(Request $request ,$id)

    {
      $request->validate([
         "*"=> "required",
         "email"=> "email"
      ]);
     
      $data_edit=Profile::find($id);
        $data_edit->update([
         "name" =>$request->name,
         "email" =>$request->email,
         "phone_number" =>$request->phone,
        ]) ; 
          return back()->withSuccess('data update'); 
        
    }
    public function destroy($id)

    {
     
    $data_delet=Profile::find($id);
    $data_delet->delete();
    return back();
           
        
    }
    public function todo()
    {
      $datas=Todo::all();
       return view('todo',compact('datas'));
     
           
        
    }
    public function insert(Request $request)
    {
        $request->validate([
         "*"=>"required",
        ]);
        Todo::insert([
             "date"=>$request->data,
             "created_at"=>now(),
             
        ]);
       
     
      return back()->with('seccuss','data entry successfully');
        
    }
    public function todoedit($id)
    {
      $todo=Todo::find($id);  
       return view('todoedit',compact('todo'));
     
           
        
    }
    public function todoupdate(Request $request, $id)
    {
     $request->validate([
      "*"=>"required"
     ]);

     Todo::find($id)->update([
      "date"=>$request->info,

  
     ]);
     
     return redirect('/todo') ;     
        
    }

    public function tododelet($id)

    {
     
    $todo_delet=Todo::find($id);
    $todo_delet->delete();
    return redirect('/todo');
           
        
    }
    
}
