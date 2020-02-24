@extends('layouts.admin.asidebar')

@extends('layouts.admin.amaster')

@section('title','Ürün listesi')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-dashboard"></i> Əsas Səhifə</a></li>
        <li class="active">Əlavə et</li>
      </ol>
	  <h1>Yazılmış rəylər </h1>
    </section><br>
 
 
 
 <div class="box-body">
             @foreach($urunler as $urun)
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>				
				<i> {{$urun->username}} : {{$urun->comments}}</i>				
				</h4>
                
              </div>
			  @endforeach
			  
              
</div>
 
		
		
		
		
		
		<div class="box box-info">
          
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/comments/{{Auth::user()->id}}" enctype="multipart/form-data" style="margin-left:-140px">
              @csrf
			  <div class="box-body">
                
				<div class="form-group">
                  <label class="col-sm-2 control-label">Göndərən:</label>

                  <div class="col-sm-10">
                    <label class="control-label">{{Auth::user()->name}}</label>
					<input type="hidden" name="username" value="{{Auth::user()->name}}">
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  </div>
                </div> 
								
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Rəy bildir:</label>
                  
				  <div class="col-sm-10">
                    <textarea name="comments" class="form-control" placeholder="Rəy bilidirin" rows="10" cols="80" ></textarea>
                  </div>
				  
                </div>			
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Göndər</button>
              </div>
			  
			 <!-- /.box-footer -->
            </form>
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
