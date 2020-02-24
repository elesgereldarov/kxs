
@extends('layouts.admin.amaster')

@section('title','Ürün Duzenleme')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Urun Duzenleme
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
        <li><a href="{{url('/')}}/admin/urunler">Urunler</a></li>
        <li class="active">Urun Duzenleme</li>
      </ol>
    </section>
 
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Duzenleme Formu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/urun/update/{{$veri[0]->Id}}" enctype="multipart/form-data">
              @csrf
			  <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Adı</label>

                  <div class="col-sm-10">
                    <input type="text" name="adi" value="{{$veri[0]->adi}}" class="form-control" placeholder="Ürün Adı">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Keywords Anahtar kelime</label>

                  <div class="col-sm-10">
                    <input type="text" name="keywords" value="{{$veri[0]->keywords}}" class="form-control"  placeholder="Keywords Anahtar kelime">
                  </div>
                </div>
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Description-Aciklama</label>

                  <div class="col-sm-10">
                    <input type="text" name="description" value="{{$veri[0]->description}}" class="form-control"  placeholder="Description">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Urun Turu</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="turu_id" >				  
				  @foreach($turler as $rs)
                    <option selected value="{{$rs->Id}}">{{$rs->adi}}</option>
				  @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 control-label">Kategorisi</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="kategori_id" >
                    @foreach($kategoriler as $rs)
                    <option selected value="{{$rs->Id}}">{{$rs->adi}}</option>
				    @endforeach
                  </select>
				  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Yazar</label>
                  <div class="col-sm-10">
                    <input type="text" name="yazar" value="{{$veri[0]->yazar}}" class="form-control"  placeholder="Yazar">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Stok Miktari</label>
                  <div class="col-sm-10">
                    <input type="text" name="stok" value="{{$veri[0]->stok}}" class="form-control"  placeholder="stok">
                  </div>
                </div>				
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Alish Fiyati</label>
                  <div class="col-sm-10">
                    <input type="text" name="afiyat" value="{{$veri[0]->afiyat}}" class="form-control"  placeholder="Alish Fiyati">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Satish Fiyati</label>
                  <div class="col-sm-10">
                    <input type="text" name="sfiyat" value="{{$veri[0]->sfiyat}}"  class="form-control"  placeholder="Satish Fiyati">
                  </div>
                </div>
				
				<div class="form-group">
                  <label  class="col-sm-2 control-label">Kitab Aciklama</label>
                  
				  <div class="col-sm-10">
                    <textarea name="aciklama" id="aciklama" class="form-control" placeholder="Aciklama" rows="10" cols="80" >
					{{$veri[0]->aciklama}}
					</textarea>
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
					  <input type="hidden"  name="resim2" value="{{$veri[0]->resim}}">
					  <input type="file" value="{{$veri[0]->resim}}" name="resim">
					  </div>
					  <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
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
