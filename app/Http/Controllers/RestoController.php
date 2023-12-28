<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Muser;
use Session;
use Crypt;

class RestoController extends Controller
{
     function index(){
        return view('home');
    }
     
     function list(){
        
        $data = Restaurant::all();
        return view('list',['data'=>$data]);
    }

     function add(Request $req){

     	//return $req->input();
     	$resto = new Restaurant;
     	$resto->name= $req->input('name');
     	$resto->email= $req->input('email');
     	$resto->address = $req->input('address');
     	$resto->save();
        $req->session()->flash('status','Restaurant added successfully');
        return redirect('list');     	
     }
     function delete($id){

            echo Restaurant::find($id)->delete();
            Session::flash('status2','Restaurant deleted successfully');
        return redirect('list');
     }

     function edit($id)
     {
     	$data =  Restaurant::find($id);
     	return view('edit',['data'=>$data]);
     }
      function update(Request $req){

     	
     	$resto = Restaurant::find($req->input('id'));
     	$resto->name= $req->input('name');
     	$resto->email= $req->input('email');
     	$resto->address = $req->input('address');
     	$resto->save();
        $req->session()->flash('status3','Restaurant updated successfully');
        return redirect('list');     	
     }

     function register(Request $req){

     	$muser = new muser;
     	$muser->name=$req->input('name');
     	$muser->email=$req->input('email');
     	$muser->contact=$req->input('contact');
     	$muser->password=Crypt::encrypt($req->input('password'));
     	$muser->save();
     	 $req->session()->put('muser',$req->input('name'));
        return redirect('/');      
     }
     function login(Request $req){

     	$muser= Muser::where("email",$req->input('email'))->get();
        if (Crypt::decrypt($muser[0]->password)==$req->input('password'))
        {
            $req->session()->put('muser',$muser[0]->name);
        return redirect('/');         	
        }
     }
}

