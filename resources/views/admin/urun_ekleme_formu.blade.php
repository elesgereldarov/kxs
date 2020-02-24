
@extends('layouts.admin.amaster')
@extends('layouts.admin.asidebar')

@section('title','Əlavə Et')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin/urunler"><i class="fa fa-dashboard"></i> Əsas Səhifə</a></li>
        <li class="active">Əlavə et</li>
      </ol>
	  <h1>Görülən işlərin qeyd səhifəsi </h1>
    </section><br>
 
		<div class="box box-info">
          
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/urun/save/{{Auth::user()->id}}" enctype="multipart/form-data">
              @csrf
			  <div class="box-body">
                
				<div class="form-group">
                  <label class="col-sm-2 control-label">İcraçı:</label>

                  <div class="col-sm-10">
                    <label class="control-label">{{Auth::user()->name}}</label>
					<input type="hidden" name="username" value="{{Auth::user()->name}}">
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  </div>
                </div> 
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Bölmə:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="problem" >
				  @foreach($allappeal as $rs)
                    <option >{{$rs->app_name}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Müraciət edənin adı:<span style="color:red">*</span></label>

                  <div class="col-sm-10">
                    <input type="text" name="m_e_adi" id="search" class="form-control" placeholder="Ad" required>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">IP Ünvanı:</label>

                  <div class="col-sm-10">
                    <input type="text" value="192.168." name="ip_adress" id="search" class="form-control" >
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Müraciətin Növü:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="problem" >
				  @foreach($allappeal as $rs)
                    <option >{{$rs->app_name}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Qurğu:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="qurqu" >
				  @foreach($turler as $rs)
                    <option >{{$rs->qurqu_adi}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Statusu:</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="status" >
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
                    <textarea name="qeyd" id="aciklama" class="form-control" placeholder="Aciklama" rows="10" cols="80" ></textarea>
                  </div>
				  
                </div>
				
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn pull-right" style="background-color:orange;color:white;">Qeyd Et</button>
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
