@extends('layouts.front.fmaster')

@section('title','Deneme Sayfa')

@section('keywords','Deneme acar sozler')

@section('description','Deneme Aciklama')

@section('sidebar')
	@include('front.fsidebar')
@endsection

@section('slider')
	@include('front.slider')
@endsection

@section('content')
	@include('front.content')
@endsection