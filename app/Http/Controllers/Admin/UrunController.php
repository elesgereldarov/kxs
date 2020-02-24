<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile\getClientOrginalExtension;
use Illuminate\Support\Facades\Auth;
class UrunController extends Controller
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
	
    /*
	public function index($Id)
    {
		$sql='select * from works where user_id=?';
        $urunler = DB::select($sql,[$Id]);
		
		$users = DB::select('select * from users');
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
				
		return view('admin.home',compact('urunler','users','count'));
    }
	*/
	
	public function index($Id)
    {
        $urunler = DB::select('select * from works order by id desc');
		
		$users = DB::select('select * from users');
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
				
		return view('admin.home',compact('urunler','users','count'));
    }
	
	public function person_works($Id)
    {
        $urunler = DB::select('select * from works where user_id=?',[$Id]);
		
		$users = DB::select('select * from users');
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
				
		return view('admin.home',compact('urunler','users','count'));
    }
	
	
	

	public function urunler_user($Id)
    {
		$sql='select * from works where user_id=?';
        $urunler = DB::select($sql,[$Id]);
		
		$users = DB::select('select * from users');


		 return view('admin.tam_urun_listesi',compact('urunler','users'));
    }
	
	public function profile($Id)
    {
		$sql='select * from works where user_id=?';
        $urunler = DB::select($sql,[$Id]);
		
		$users = DB::select('select * from users');


		 return view('admin.profile',compact('urunler','users'));
    }
	
	public function urunler()
    {

		$x="aaa";
		echo $x;
		

    }


  public function create($Id)
    {
        //ekeleme formu
		$turler=DB::select('SELECT * FROM turler ORDER BY İd');
		$kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY İd');
		$allappeal=DB::select('SELECT * FROM allappeal ORDER BY id');
		$users = DB::select('select * from users');
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
		
		return view('admin.urun_ekleme_formu',compact('turler','kategoriler','allappeal','users','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
	 
	 
	 
    public function store(Request $request)
    { 
		
		
		$id = Auth::user()->id;
		DB::table('works')->insert(
		[ 
		
		'm_e_adi'=>$request->get('m_e_adi'),
		  'problem'=>$request->get('problem'),
		  'qurqu'=>$request->get('qurqu'),
		  'status'=>$request->get('status'),
		  'hell_novu'=>$request->get('hell_novu'),
		  'deyisen_detal'=>$request->get('deyisen_detal'),		
		  'qeyd'=>$request->get('qeyd'),		
		  'username'=>$request->get('username'),		
		  'ip_adress'=>$request->get('ip_adress'),		
		  'user_id'=>$request->get('user_id')		
		]		
		);	
		
		
		return redirect('admin/works/'.$id)->with('success','Məlumat qeyd edildi');
		
		
     
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

    
    public function edit($id)
    {
        //duzenlem formunu gosterme
		$turler=DB::select('SELECT * FROM turler ORDER BY İd');
		$kategoriler=DB::select('SELECT * FROM kategoriler ORDER BY İd');
		
		$sql='select k.*,c.adi as c_adi,t.adi as t_adi
		from kitaplars k,kategoriler c,turler t
		where k.kategori_id=c.id and k.turu_id=t.id and k.Id=?
		';
		$veri =DB::select($sql,[$id]);
		
		return view('admin.urun_duzenleme_formu',compact('veri','turler','kategoriler'));
    
		
    }

    
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
		
		DB::table('kitaplars')
		->where('Id',$id)		
		->update(['adi'=>$request->get('adi'),
		  'keywords'=>$request->get('keywords'),
		  'description'=>$request->get('description'),
		  'turu_id'=>$request->get('turu_id'),
		  'kategori_id'=>$request->get('kategori_id'),
		  'yazar'=>$request->get('yazar'),
		  'stok'=>$request->get('stok'),
		  'afiyat'=>$request->get('afiyat'),
		  'sfiyat'=>$request->get('sfiyat'),
		  'aciklama'=>$request->get('aciklama'),
		  'durum'=>$request->get('durum'),
		  'resim'=>$name
		]);	
		
		return redirect('admin/urunler')->with('success',$request->adi.'Urunu Yenilendi');
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
		DB::select('DELETE FROM kitaplars WHERE Id=?',[$id]);
		return redirect('admin/urunler')->with('success','Urun Silindi');
    }
	
	
	public function galeri_formu($Id)
    {
        //duzenlem formunu gosterme
		$resimler=DB::select('SELECT * FROM images WHERE urun_id=?',[$Id]);		
		$veri=DB::select('SELECT * FROM kitaplars WHERE Id=?',[$Id]);		
		
		return view('admin.urun_galeri_ekleme',compact('veri','resimler'));    
		
    }
	public function galeri_formu_new()
    {	
		
		$resimler=DB::select('SELECT * FROM images');		
		$veri=DB::select('SELECT * FROM kitaplars ');		
		
		return view('admin.urun_galeri_ekleme',compact('veri','resimler'));     
		
    }
	
	public function galeri_ekle(Request $request)
    { 
		if($request->hasfile('resim'))
		{
			$file = $request->file('resim');
			$name=time().$file->getClientOriginalname();
			$file->move(public_path().'/userfiles/',$name);	
				
		}
		else		
		$name=$request->resim2;
	
		DB::table('images')->insert(
		[ 'urun_id'=>$request->Id,		  
		  'resim'=>$name]		
		);	
		
		return redirect('admin/urun/getgaleri/'.$request->id)->with('success','Shekil Elave olundu');		
     
    }
	
	 public function galeri_sil($Id)
    {
		
        //silme
		DB::select('DELETE FROM images WHERE Id=?',[$Id]);
		return redirect('admin/urun/getgaleri_new')->with('success','Galeriden shekil Silindi');
    }
}
