<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
	{
		
		$turler=DB::select('SELECT * FROM turler ORDER BY adi');
		$kategori = DB::select('SELECT * FROM kategoriler  ORDER BY adi desc');
		$yeniler=DB::select('SELECT * FROM kitaplars ORDER BY adi');
		$popular=DB::select('SELECT * FROM kitaplars ORDER BY Id');		
		
		//return view('welcome');
		//urunler sayfasinin ana girisi       
		 return view('front.home',compact('kategori','yeniler'));
	}
	
	
	public function urun($id)
	{
		
		$turler=DB::select('SELECT * FROM turler ORDER BY adi');
		$kategori = DB::select('SELECT * FROM kategoriler  ORDER BY adi ');
		$urun=DB::select('SELECT * FROM kitaplars where Id=?',[$id]);		
		$resimler=DB::select('SELECT * FROM images WHERE urun_id=?',[$id]);	
		
		return view('front.urun_detay',compact('turler','kategori','urun','resimler'));
	}
	
}
