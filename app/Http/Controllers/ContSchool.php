<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\school;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContSchool extends Controller
{
    public function index (){
        return school::get();
    }

    public function store  (Request $request){
        school::insert([
            'name'=> $request->name,
            'phone'=> $request->phone
        ]);
        return $this->index();
    }

    public function delete (Request $request){
        school::where('id','=',$request-> id )->delete();
        return $this->index();
    }

    public function update (Request $request,$id){
        school::where('id','=',$id )->update(
       $request->all()
        );
        return $this->index();
    }

    public function search (Request $request) {
        $n =$request->name;
        return school::where('name','like','%'.$n.'%')->get();
    }


}
