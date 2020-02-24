
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Galeri Formu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('/')}}/admin/urun/galeri/{{$veri[0]->Id}}" enctype="multipart/form-data">
              @csrf
			 
              Mehsulun Adi:<label class="col-sm-2 control-label">{{$veri[0]->adi}}</label>
              <br>
			 <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
			 <hr>
		     <input type="file" name="resim" onchange="javascript:this.form.submit();">
		     <input type="hidden" name="id" value="{{$veri[0]->Id}}">
			
			@if(\Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
			</div><br/>		
			@endif	
			<hr>
			@foreach($resimler as $rs)
			<img src="{{url('/')}}/userfiles/{{$rs->resim}}" height="100">
			<a href="{{url('/')}}/admin/urun/galerisil/{{$rs->Id}}" onclick="return confirm('Silməyə Əminsiz?')">Sil</a>
			@endforeach
            </form>	  
