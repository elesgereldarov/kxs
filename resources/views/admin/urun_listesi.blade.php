@extends('layouts.admin.amaster')

@section('title','Bütün İşlər')

@section('keywords','')

@section('content')
<!-- Content Header (Page header) -->



    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-dashboard"></i>Əsas Səhifə</a></li>
        <li><a href="#">{{Auth::user()->name}}</a></li>
      </ol>
	  <h1>Görülən İşlər </h1>
    </section><br>
	           
	
	
	


<div class="row">
        
		<a href="{{url('/')}}/admin/urun/ekle/{{Auth::user()->id}}">
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3 style="color:white; padding:25px; text-align:center;padding-top:35px;">Əlavə Et</h3>
            </div>
            <div class="icon">
              <i class="ionicons ion-android-add"></i>
            </div>
            <a href="{{url('/')}}/admin/urun/ekle/{{Auth::user()->id}}" class="small-box-footer">
            <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
		</a>
		
		<a href="{{url('/')}}/admin/urun/direct/{{Auth::user()->id}}">
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 style="color:white; padding:25px; text-align:center;padding-top:35px;">Yönləndir</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('/')}}/admin/urun/direct/{{Auth::user()->id}}" class="small-box-footer">
            <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
		</a>
		
		<a href="{{url('/')}}/admin/direct_to/{{Auth::user()->id}}">
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="color:white; padding:25px; text-align:center;padding-top:35px;">Yönlənmələr</h3>
            </div>
            <div class="icon">
              <i class="ionicons ion-compose"></i>
            </div>
            <a href="{{url('/')}}/admin/direct_to/{{Auth::user()->id}}" class="small-box-footer">
            <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
		</a>
		
		<a href="{{url('/')}}/admin/suallar/{{Auth::user()->id}}">
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 style="color:white; padding:25px; text-align:center;padding-top:35px;">Messenger</h3>
            </div>
            <div class="icon">
              <i class="ionicons ion-chatbubbles"></i>
            </div>
            <a href="{{url('/')}}/admin/suallar/{{Auth::user()->id}}" class="small-box-footer">
            <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
		</a>
		
     
      </div>



 <div class="box">
            <!-- /.box-header -->
			@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
			</div><br/>		
			@endif	
            <div class="box-body">
			
			
			<table id="example1" class="table table-hover table-striped">
                <thead>
                <tr>
                  <th>Həll olan problem: </th>
                  <th>Həll Edən: </th>
                  <th >Statusu:</th>
                  <th>Qurğu:</th>
                  <th>Necə həll olunub:</th>
                  <th>Dəyişən Detal:</th>
                  <th>Müraciət edən:</th>
                  <th>IP Ünavanı:</th> 
                  <th>Həll Olama Tarixi :</th> 
				</tr>
                </thead>
                <tbody>
               @foreach($urunler as $urun)
                <tr>
                  <td>{{$urun->problem}}</td>
                  <td>{{$urun->username}}</td>
                  <td class="td" style="font-size: 15px;">{{$urun->status}}</td>
                  <td>{{$urun->qurqu}}</td>
                  <td>{{$urun->hell_novu}}</td>
                  <td>{{$urun->deyisen_detal}}</td>
                  <td>{{$urun->m_e_adi}}</td>
                  <td>{{$urun->ip_adress}}</td>
                  <td>{{$urun->created_at}}</td>
                  
                </tr>
                @endforeach          
                
                </tbody>
                
              </table>
			
            </div>
           
          </div>
		  
		  
		  
		  
@endsection