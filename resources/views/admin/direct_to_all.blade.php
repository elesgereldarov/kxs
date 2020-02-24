
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
	  <h1>Göndərilən Tapşırıq </h1>
    </section><br>
 
		<div class="box box-info">
          
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/direct_solution/{{Auth::user()->id}}" enctype="multipart/form-data">
              @csrf
			  <input type="hidden" name="task_id" value="{{$task_id}}">
			  
			  <div class="box-body">
                
				<div class="form-group">
                  <label class="col-sm-2 control-label">Qəbul Edən:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{Auth::user()->name}}</h4>
						<input type="hidden" value="{{Auth::user()->name}}" name="username">
						<input type="hidden" value="{{Auth::user()->id}}" name="user_id">
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Yönləndirən:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->send_username}}</h4>
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Bölgə:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->region}}</h4>
						<input type="hidden" value=" {{$manage[0]->region}}" name="region">
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Müraciət edənin adı:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->applicant}}</h4>
						<input type="hidden" value="{{$manage[0]->applicant}}" name="applicant">
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">IP Ünvanı:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->ip_adress}}</h4>
						<input type="hidden" value="{{$manage[0]->ip_adress}}" name="ip_adress">
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Müraciətin Növü:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->problem}}</h4>
						<input type="hidden" value="{{$manage[0]->problem}}" name="problem">
					  </div>
						  
				  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Qurğu:</label>

                  <div class="col-sm-10">
              
					  <div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-info"></i> {{$manage[0]->device}}</h4>
						<input type="hidden" value="{{$manage[0]->device}}" name="device">
					  </div>
						  
				  </div>
                </div> 
				
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Statusu:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="status" >
				  <option>{{$manage[0]->status}}</option>
				  @foreach($kategoriler as $rs)
                    <option >{{$rs->adi}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Həll Olma Növü:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="hell_novu" >
				  @foreach($turler as $rs)
                    <option >{{$rs->adi}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Dəyişən Detal:</label>
                  <div class="col-sm-10">
                    <input type="text" name="deyisen_detal" class="form-control"  placeholder="Dəyişən Detal">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Qeyd:</label>
                  
				  <div class="col-sm-10">
                    <textarea name="note" id="aciklama" class="form-control" placeholder="Aciklama" rows="10" cols="80" ></textarea>
                  </div>
				  
                </div>
				
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn pull-right" style="background-color:orange;color:white;">Həll Et</button>
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
