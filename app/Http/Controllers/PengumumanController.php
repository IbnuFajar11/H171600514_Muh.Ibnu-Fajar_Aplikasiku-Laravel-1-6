<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listPengumuman=Pengumuman::all(); //select*from pengumuman

    //blade
    return view('pengumuman.index', compact('listPengumuman'));
    //return view(view: 'pengumuman.index')->with('data',$listPengumuman);
	}

	public function show($id){

		//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
		$Pengumuman=Pengumuman::find($id);

		return view('pengumuman.show', compact('Pengumuman'));
	}

	public function create(){

		$KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
		return view('pengumuman.create',compact('KategoriPengumuman'));
	}

	public function store(Request $request){

		$input= $request->all();
		
		Pengumuman::create($input);

		return redirect(route('pengumuman.index'));

	}
}
