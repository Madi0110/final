<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){

        return view('players');
    }

    public function create(){
        return view('create');
    }
public function store(Request $request){
        $this->validate($request,[
            'fname'=>'required',
                'sur_name'=>'required',
                'pos'=>'required',
                'num'=>'required'
            ]);
        $player = new players;
        $player->name = $request->fname;
        $player->surname = $request->sur_name;
        $player->position = $request->pos;
        $player->number = $request->num;
        $player->save();

        return redirect(route('home'))->with('successMsg','Player Successfully Added');
}

}
