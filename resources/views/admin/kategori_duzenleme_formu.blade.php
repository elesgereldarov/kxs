
@extends('layouts.admin.amaster')

@section('title','Kataqoriya Duzenleme')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kataqoriya Duzenleme
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
        <li><a href="{{url('/')}}/admin/urunler">Urunler</a></li>
        <li class="active">Kataqoriya Duzenleme</li>
      </ol>
    </section>
 
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Kataqoriya Duzenleme Formu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/kategori/update/{{$datas[0]->a_id}}" enctype="multipart/form-data">
              @csrf
			  <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kataqoriya Adı</label>

                  <div class="col-sm-10">
                    <input type="text" name="adi" value="{{$datas[0]->a_adi}}" class="form-control" placeholder="Kataqoriya Adı">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Keywords Anahtar kelime</label>

                  <div class="col-sm-10">
                    <input type="text" name="keywords" value="{{$datas[0]->a_keywords}}" class="form-control"  placeholder="Keywords Anahtar kelime">
                  </div>
                </div>
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Description-Aciklama</label>

                  <div class="col-sm-10">
                    <input type="text" name="description" value="{{$datas[0]->a_description}}" class="form-control"  placeholder="Description">
                  </div>
                </div>			
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Ust Kataqoriya</label>
                  <div class="col-sm-10">
                    <input type="text" name="ust_id" value="{{$datas[0]->b_adi}}" class="form-control"  placeholder="Ust Kataqoriya">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Yayin Durumu</label>
                  <div class="col-sm-10">
				  <select class="form-control" name="durum" >
                    <option>Bəli</option>
                    <option>Xeyir</option>
                  </select>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Shekil secin</label>
					  <div class="col-sm-10">
					  <input type="hidden"   name="resim2" value="">
					  <input type="file" required value="" name="resim">
					  </div>
					  <img src="{{url('/')}}/userfiles" height="100">
				      <p class="help-block">Kitab Esas Shekil</p>
					  
                </div>
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Çıxış</button>
                <button type="submit" class="btn btn-info pull-right">Yenilə</button>
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
