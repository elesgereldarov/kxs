<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('admin');
	}
	
    public function index()
	{
		return view("admin.home");
	}
	public function urunler()
	{
		 $urunler = DB::select('select * from kitaplar order by adi');

		 return view('admin.urun_listesi',['urunler' => $urunler]);
	}
}
