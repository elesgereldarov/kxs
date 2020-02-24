<?php

namespace App\Http\Controllers\Admin;

use App\kitaplar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile\getClientOrginalExtension;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
	{
		$this->middleware('admin');
	}
	
	
    public function index()
    {
		// katagori sayfasinin ana girisi
		$kategoriler=DB::select('select a.Id as a_id,a.adi as a_adi, a.keywords as a_keywords,
								a.description as a_description,a.durum as a_durum,a.resim as a_resim, 
								b.adi as b_adi from kategoriler a LEFT JOIN kategoriler b 
								on a.ust_id =b.Id');
		return view('admin.kategori_listesi',['datas'=>$kategoriler]);
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ekeleme formu
		$turler=DB::select('SELECT * FROM turler ORDER BY adi');
		$kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY adi');
		return view('admin.kategori_ekleme_formu',['turler'=>$turler],['kategoriler'=>$kategoriler]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
	 
	 
	 
    public function store(Request $request)
    { 
		if($request->hasfile('resim'))
		{
			$file = $request->file('resim');
			$name=$file->getClientOriginalname();
			$file->move(public_path().'/userfiles/',$name);	
				
		}
		else		
		$name=$request->resim2;
	
		DB::table('kategoriler')->insert(
		[ 'adi'=>$request->get('adi'),
		  'keywords'=>$request->get('keywords'),
		  'description'=>$request->get('description'),
		  'ust_id'=>$request->get('ust_id'),		  
		  'durum'=>$request->get('durum'),
		  'resim'=>$name]		
		);	
		
		return redirect('admin/kategoriler')->with('success','Ktaqoriya Kaydedildi');
		
		
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // tek veri gosterme
		echo "Gosterme ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //duzenlem formunu gosterme
		$kategoriler=DB::select('select a.Id as a_id,a.adi as a_adi, a.keywords as a_keywords,
								a.description as a_description,a.durum as a_durum,a.resim as a_resim, 
								b.adi as b_adi from kategoriler a LEFT JOIN kategoriler b 
								on a.ust_id =b.Id');
		
		return view('admin.kategori_duzenleme_formu',['datas'=>$kategoriler]);
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //duzenlem formundan gelen verileri veritabaninda update etme
		
		if($request->hasfile('resim'))
		{
			$file = $request->file('resim');
			$name=$file->getClientOriginalname();
			$file->move(public_path().'/userfiles/',$name);	
				
		}
		else		
		$name=$request->resim2;
		
		DB::table('kategoriler')
		->where('Id',$id)		
		->update(['adi'=>$request->get('adi'),
		  'keywords'=>$request->get('keywords'),
		  'description'=>$request->get('description'),
		  'ust_id'=>$request->get('ust_id'),
		  'durum'=>$request->get('durum'),
		  'resim'=>$name
		]);	
		
		return redirect('admin/kategoriler')->with('success',$request->adi.'Kataqoriyasi Yenilendi');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //silme
		DB::select('DELETE FROM kategoriler WHERE Id=?',[$id]);
		return redirect('admin/kategoriler')->with('success','Kataqoriya Silindi');
    }
}
