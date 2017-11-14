<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categorie;

class CategorieController extends Controller{
    
	public function __construct(){

	}

	public function index(){
		//$categories = Categorie::get();
		//return view('categorie',['categorie' => $categories]);
		//return "Test..";
		//return View::make('categories.index',compact('categories'));

		$categories = Categorie::all()->toArray();
        return view('categories.index', compact('categories'));

		//return view('categorie');
	}

	public function create(){
		return view('categories.create');
	}

	public function store(Request $request){
		$categorie = $this->validate(request(), [
          'nom_categorie' => 'required',
        ]);

        Categorie::create($categorie);
        return back()->with('success', 'Categorie has been added');
	}

	public function show($id){

	}

	public function edit($id_categorie){
		$categorie = Categorie::findOrFail($id_categorie);
		return view('categories.edit',compact('categorie','id_categorie'));
		//return View::make('categories.edit',compact('categorie','id'));
	}


	public function update(Request $request, $id_categorie){
/*		$categorie = Categorie::findOrFail($id);
		return View::make('categorie.update',compact('post'));
*/
		//dd($request->get('name'));

		$categorie = Categorie::findOrFail($id_categorie);
        $this->validate(request(), [
          'name' => 'required'
        ]);
        //dd($request->get('nom_categorie'));
        $categorie->nom_categorie = $request->get('name');    //$request->get('nom_categorie');
        $categorie->save();
        return redirect('categories')->with('success','Categorie has been updated');
	}

	public function destroy($id){
		//dd('testeur');
		$categorie = Categorie::find($id);
		
        $categorie->delete();

        return redirect('categories')->with('success','Categorie has been  deleted');
	}

}



//$product = Product::find($id);
//return view('products.edit',compact('product','id'));
