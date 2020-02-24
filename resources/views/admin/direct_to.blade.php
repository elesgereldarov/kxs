
@extends('layouts.admin.asidebar')

@extends('layouts.admin.amaster')

@section('title','Ürün listesi')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler/{{Auth::user()->id}}"><i class="fa fa-dashboard"></i> Əsas Səhifə</a></li>
        <li class="active">Əlavə et</li>
      </ol>
	  <h1>Göndərilən Tapşırıq </h1>
    </section><br>
 
		<div class="box box-info">
          
				  
			  
			  
			  
			  
			  
			  <div class="box-body">
                
				@foreach($manage as $urun)
				<div class="callout callout-info">
				<h4>Yönlədirən,<span style="margin-left:10%;"> Tapşırıq</span> <a href="{{url('/')}}/admin/direct_to_all/{{$urun->id}}" type="button" class="btn  btn-default btn-lg"  style="float:right;color:black;text-decoration :none;">Yönlədirməyə Bax</a></h4>
				<input type="hidden" value="{{$urun->id}}" name="id_task">
				<p>{{$urun->send_username}},<span style="margin-left:10%;"> {{$urun->problem}}</span></p>
				</div>
				@endforeach		
				
				
				
				
				
              </div>
             
          </div>
      
              
		  
@endsection		  

@section("java")
	<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
	<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('aciklama');
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
  });
</script>

 
 
 
@endsection	
