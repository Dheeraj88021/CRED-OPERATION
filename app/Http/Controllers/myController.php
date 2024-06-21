<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class myController extends Controller
{
    
    // inser the data in to the database 

    function insert(Request $req){
       $name = $req->get('pname');
       $price = $req->get('pprice');
       $pimage = $req->file('image')->getClientOriginalName();
       $req->image->move(public_path('images'), $pimage);
       $prod = new product();
       $prod->PName = $name;
       $prod->PPrice = $price;
       $prod->PImage = $pimage;

       $prod->save();
       return redirect('/');

    }

    // read the data of the UI and the database

    function readData(){
        $pData = product::all();
        return view('insertRead',['data'=> $pData]);
    }

    // Delete the data into the UI and the databases

    function updateDelete(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        if($req->get('update') == 'Update'){
            return view('updateView',['pid'=> $id,'pname'=> $name, 'pprice'=> $price]);

        }else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');

    }

    
    // update the data into the UI and the databases

    function update(Request $req){
        $ID = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        $prod = product::find($ID);
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->save();
        return redirect('/');

    }
}
