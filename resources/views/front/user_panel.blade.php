@section('content')

@extends('layouts.front.fmaster')

@section('title','User Login')

@section('keywords','User Login')

@section('description','User Login')

@section('sidebar')
@include('front.usersidebar')
@endsection


<ul class="breadcrumb">
    <li><a href="{{url('/')}}">Əsas Səhif'</a> <span class="divider">/</span></li>
    <li><a href="{{url('/user')}}">Login</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
</ul>	
	
		<div class="row">
			<div class="span4">
				<div class="well">
						<h5>User Panel</h5>						
				</div>
			</div>
		</div>
	</div>
	</div>


@endsection