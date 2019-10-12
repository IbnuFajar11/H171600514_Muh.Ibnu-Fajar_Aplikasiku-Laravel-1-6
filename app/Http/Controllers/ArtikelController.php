<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listArtikel=Artikel::all(); //select*from artikel

    //blade
    return view('artikel.index', compact('listArtikel'));
    //return view(view: 'artikel.index')->with('data',$listArtikel);
	}

	public function show($id){

		//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
		$Artikel=Artikel::find($id);

		if(empty($Artikel)){

		return redirect(route('artikel.index'));
	}

		return view('artikel.show', compact('Artikel'));
	}

	public function create(){

		$KategoriArtikel= KategoriArtikel::pluck('nama','id');

		return view('artikel.create',compact('KategoriArtikel'));
	}

	public function store(Request $request){

		$input= $request->all();
		
		Artikel::create($input);

		return redirect(route('artikel.index'));

	}

	public function edit($id){

	$Artikel=Artikel::find($id);

	if(empty($Artikel)){

		return redirect(route('artikel.index'));
		}

		$KategoriArtikel= KategoriArtikel::pluck('nama','id');

		return view('artikel.edit', compact('Artikel','KategoriArtikel'));
	}

	public function update($id,Request $request){

	$Artikel=Artikel::find($id);
	$input=$request->all();

	if(empty($Artikel)){

		return redirect(route('artikel.index'));
		}

		$Artikel->update($input);
		return redirect(route('artikel.index'));
	}

	public function destroy($id){

	$Artikel=Artikel::find($id);

	if(empty($Artikel)){

		return redirect(route('artikel.index'));
		}

		$Artikel->delete();
		return redirect(route('artikel.index'));
} 
	public function trash(){
   
   		 $listArtikel=Artikel::onlyTrashed(); 

    	return view('artikel.index', compact('listArtikel'));
   
	}

}
