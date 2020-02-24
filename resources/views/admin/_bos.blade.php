@extends('layouts.admin.amaster')

@section('title','Sayfa bashliqi')

@section('keywords','')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Urun Ekleme
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sayfaxx</a></li>
      </ol>
    </section>
 <!-- Content iceriyi buraya gelecek -->
 

<input type="text" name="username" placeholder="username"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="password" placeholder="password"><br><br>
<input type="submit" value="REGISTER NOW!">



		  
@endsection		  