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
	  <h1>Mesajlar </h1>
    </section><br><br><br><br>
 
 
 
	
<div class="col-md-12">
          <!-- DIRECT CHAT SUCCESS -->
          <div class="box box-success direct-chat direct-chat-success">
            <div class="box-header with-border">
              <h3 class="box-title">Messenger</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="" class="badge bg-green" data-original-title="3 New Messages">3</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                  <i class="fa fa-comments"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
              
			  
                <!-- Message to the right -->
                 @foreach($urunler as $urun)
				<div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">{{$urun->username}} :</span>
                    <span class="direct-chat-timestamp pull-left">{{$urun->created_at}} :</span>
                  </div>
                  <!-- /.direct-chat-info -->
                   <div class="direct-chat-text">
                    {{$urun->message}}
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
				  @endforeach
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
             
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form method="post" action="{{url('/')}}/admin/suallar/{{Auth::user()->id}}" enctype="multipart/form-data">
                @csrf
				<div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <input type="hidden" name="username" value="{{Auth::user()->name}}">   
					  <span class="input-group-btn">
                        <button type="submit" class="btn btn-success btn-flat">Göndər</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
	  
	  

              
		  
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
