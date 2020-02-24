@extends('layouts.admin.amaster')

@section('title','Ürün ekleme sayfasi')

@section('keywords','')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-dashboard"></i>Əsas Səhifə</a></li>
      </ol>
	  <h1>Görülən işlər </h1>
    </section><br>

 <div class="box">
<!-- /.box-header -->
			@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
			</div><br/>		
			@endif	
            <div class="box-body">
              <table class="table table-striped table-dark table-hover">
                <tbody><tr>
                  <th>Müraciət edən:</th>
                  <th>IP Ünvanı:</th>
                  <th>Həll olan problem: </th>
                  <th>Status:</th>
                  <th>Qurğu:</th>
                  <th>Necə həll olunub:</th>
                  <th>Dəyişən Detal:</th>
                  
                </tr>
				@foreach($urunler as $urun)
                <tr>
                  <td>{{Auth::user()->name}}</td>
                  <td>{{$urun->ip_adress}}</td>
                  <td >{{$urun->problem}}</td>
                  <td >{{$urun->status}}</td>
                  <td >{{$urun->qurqu}}</td>
                  <td>{{$urun->hell_novu}}</td>
                  <td>{{$urun->deyisen_detal}}</td>
                </tr>
                @endforeach
              
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
@endsection