<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller{
    
	public function __construct(){

	}

	public function index(){
		//$categories = Categorie::get();
		//return view('view/categories',['categories' => $categories]);
		//return "Test..";
		return View::make('categories.index',compact('categories'));
	}

	public function create(){


	}

	public function store(Request $request){

	}

	public function show($id){

	}


	public function edit($id){
		$categorie = Categorie::findOrFail($id);
		return View::make('posts.edit',compact('post'));
	}

	public function update(Request $request, $id){
		$categorie = Categorie::findOrFail($id);
		return View::make('posts.update',compact('post'));
	}

	public function destroy($id){

	}

}



