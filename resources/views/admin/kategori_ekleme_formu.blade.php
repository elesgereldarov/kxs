
@extends('layouts.admin.amaster')

@section('title','Kataqoriya listesi')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Ekleme
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
        <li><a href="{{url('/')}}/admin/urunler">Urunler</a></li>
        <li class="active">Kategori Ekleme</li>
      </ol>
    </section>
 
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Kataqoriya Ekleme Formu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/kategori/save" enctype="multipart/form-data">
              @csrf
			  <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kataqoriya Adı</label>

                  <div class="col-sm-10">
                    <input type="text" name="adi" required class="form-control" placeholder="Kataqoriya Adı">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Keywords Anahtar kelime</label>

                  <div class="col-sm-10">
                    <input type="text" name="keywords" class="form-control"  placeholder="Keywords Anahtar kelime">
                  </div>
                </div>
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Description-Aciklama</label>

                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control"  placeholder="Description">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Description-Aciklama</label>

                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control"  placeholder="Description">
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
					  <input type="file" required name="resim">
					  <input type="hidden"  name="resim2">
					  </div>
				<p class="help-block">Ktaqoriya Esas Shekil</p>
					  
                </div>
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Çıxış</button>
                <button type="submit" class="btn btn-info pull-right">Qeyd Et</button>
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
