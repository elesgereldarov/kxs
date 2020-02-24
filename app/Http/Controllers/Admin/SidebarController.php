<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SidebarController extends Controller
{
    public function index()
    {
		$turler=DB::select('SELECT * FROM turler ORDER BY adi');
		$kategori = DB::select('SELECT * FROM kategoriler  ORDER BY adi');
		$yeniler=DB::select('SELECT * FROM kitaplars ORDER BY adi');
		$popular=DB::select('SELECT * FROM kitaplars ORDER BY Id');		
		//return view('welcome');
		//urunler sayfasinin ana girisi       
		 return view('front.home',compact('kategori','yeniler'));
    } 
	
	public function mesajlar($Id)
    {
		$turler=DB::select('SELECT * FROM turler ORDER BY adi');
		$kategori = DB::select('SELECT * FROM kategoriler  ORDER BY adi');
		$yeniler=DB::select('SELECT * FROM kitaplars ORDER BY adi');
		$popular=DB::select('SELECT * FROM kitaplars ORDER BY Id');		
		
		$users = DB::select('select * from users');
		$sql='select * from works where user_id=?';
        $urunler = DB::select($sql,[$Id]);
		$reyler ='select * from reyler';
		
		//return view('welcome');
		//urunler sayfasinin ana girisi       
		 return view('admin.home',compact('kategori','yeniler','urunler','users','reyler'));
    }
	
	
	public function reyler($Id)
    {
		$users = DB::select('select * from users');
        $urunler = DB::select('select * from reyler');
		$reyler ='select * from works';
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
		
		return view('admin.reyler',compact('urunler','users','count'));
    }
	
	
	public function rey_gonder(Request $request)
    {
		
		$id = Auth::user()->id;
		DB::table('reyler')->insert(
		[ 
		
		'username'=>$request->get('username'),
		'comments'=>$request->get('comments')		
		]		
		);	
		
		
		return redirect('admin/comments/'.$id)->with('success','Məlumat qeyd edildi');
    }
	
	
	
	
	
	public function suallar($Id)
    {
		$users = DB::select('select * from users');
        $urunler = DB::select('select * from masanger');
		$reyler ='select * from works';
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
		
		return view('admin.suallar',compact('urunler','users','count'));
    }
	
	
	public function sual_gonder(Request $request)
    {
		
		$id = Auth::user()->id;
		DB::table('masanger')->insert(
		[ 
		
		'username'=>$request->get('username'),
		'message'=>$request->get('message')		
		]		
		);	
		
		
		return redirect('admin/suallar/'.$id)->with('success','Məlumat qeyd edildi');
    }
	
	
	public function direct($Id)
    {
		$users = DB::select('select * from users');
        $urunler = DB::select('select * from masanger');
        $turler = DB::select('select * from turler');
        $kategoriler = DB::select('select * from kategoriler');
        $allappeal = DB::select('select * from allappeal');
        $subject = DB::select('select * from subject');
		$count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
		
		return view('admin.yonlendir',compact('urunler','users','allappeal','turler','kategoriler','subject','count'));
    }
	
	
	
	public function direct_gonder(Request $request)
    {
		
		$id = Auth::user()->id;
			
		
		$username=$request->get('take_username');
		$user = DB::select('select id from users where name=?',[$username]);

		foreach ($user as $user) 
		{
		$take_user_id=$user->id;			
		
		DB::table('manage')->insert([			
		'send_user_id'=>$request->get('send_user_id'),
		'send_username'=>$request->get('send_username'),	
		'take_username'=>$request->get('take_username'),
		'take_user_id'=>($take_user_id),		
		'region'=>$request->get('region'),	
		'applicant'=>$request->get('applicant'),	
		'ip_adress'=>$request->get('ip_adress'),	
		'problem'=>$request->get('problem'),	
		'device'=>$request->get('device'),	
		'status'=>$request->get('status'),	
		'solution'=>('No'),	
		'note'=>$request->get('note')
		]);		
		}
		
		return redirect('admin/works/'.$id)->with('success','Məlumat Yönləndirildi');
    }
	
	
	public function direct_to($Id)
    {
		$users = DB::select('select * from users');
        $urunler = DB::select('select * from masanger');
        $turler = DB::select('select * from turler');
        $kategoriler = DB::select('select * from kategoriler');
        $allappeal = DB::select('select * from allappeal');
        $subject = DB::select('select * from subject');
        $manage = DB::select('select * from manage where solution="No" and take_user_id=?',[$Id]);
        $count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$Id]);
		
		return view('admin.direct_to',compact('urunler','users','allappeal','turler','kategoriler','subject','manage','count'));
    }
	
	
	
	public function direct_to_all($Id)
    {
		$task_id=$Id;
		$id = Auth::user()->id;
		$users = DB::select('select * from users');
        $urunler = DB::select('select * from masanger');
        $turler = DB::select('select * from turler');
        $kategoriler = DB::select('select * from kategoriler');
        $allappeal = DB::select('select * from allappeal');
        $subject = DB::select('select * from subject');
        $manage = DB::select('select * from manage where solution="No" and id=?',[$Id]);
        $count = DB::select('select count(*)-1 as say from manage where solution_embedded="Yes" or solution="No"   and take_user_id=?',[$id]);
		
		return view('admin.direct_to_all',compact('urunler','users','allappeal','turler','kategoriler','subject','manage','count','task_id'));
    }
	
	
	
	public function direct_solution(Request $request, $id)
    {
		$id = Auth::user()->id;
		$task_id=$request->get('task_id');
		
		DB::table('works')->insert(
		[ 
		
				
		  'username'=>$request->get('username'),
		  'user_id'=>$request->get('user_id'),
		  'region'=>$request->get('region'),
		  'm_e_adi'=>$request->get('applicant'),
		  'ip_adress'=>$request->get('ip_adress'),
		  'problem'=>$request->get('problem'),
		  'qurqu'=>$request->get('device'),
		  'status'=>$request->get('status'),
		  'hell_novu'=>$request->get('hell_novu'),
		  'deyisen_detal'=>$request->get('deyisen_detal'),		
		  'qeyd'=>$request->get('note')		
		  		
		  		
		]		
		);	
		
		DB::table('manage')
		->where('id',$task_id)		
		->update(['solution'=>'Yes']);	
		
		echo $task_id;
		return redirect('admin/works/'.$id)->with('success','Həlliniz qeyd edildi');
    }
	

	
	
}
