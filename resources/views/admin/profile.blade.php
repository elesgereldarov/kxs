@extends('layouts.admin.amaster')

@section('title','Ürün ekleme sayfasi')

@section('keywords','')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-dashboard"></i>Əsas Səhifə</a></li>
        <li><a href="#">{{$urunler[0]->username}}</a></li>
      </ol>
	  <h1>İstifadəçinin gördüyü işlər </h1>
    </section><br>

 <div class="box">
            <!-- /.box-header -->
			@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
			</div><br/>		
			@endif	
            <div class="box-body">
              <table class="table table-hover ">
                <tbody><tr>
                  <th>İD</th>
                  <th>Həll olan problem: </th>
                  <th>Statusu:</th>
                  <th>Qurğu:</th>
                  <th>Necə həll olunub:</th>
                  <th>Dəyişən Detal:</th>
                  <th>Müraciət edən:</th>
                </tr>
				@foreach($urunler as $urun)
                <tr>
                  <td>{{$urun->Id}}</td>
                  <td>{{$urun->problem}}</td>
                  <td>{{$urun->status}}</td>
                  <td>{{$urun->qurqu}}</td>
                  <td>{{$urun->hell_novu}}</td>
                  <td>{{$urun->deyisen_detal}}</td>
                  <td>{{$urun->m_e_adi}}</td>
                  
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