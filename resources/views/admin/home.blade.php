@extends('layouts.admin.amaster')


@section('keywords','Deneme admin acar sozler')

@section('description','Deneme admin Aciklama')


@section('asidebar')
	@include('layouts/admin.asidebar')
@endsection

@section('content')
	@include('admin.urun_listesi')
@endsection


