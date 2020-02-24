@section('sidebar')


              


<div id="sidebar" class="span3">
<div class="well well-small">
@if (Auth::check())
{{Auth::user()->name}}
	<ul class="nav nav-list">
	<li><a href="{{url('/')}}/user/profil/{{Auth::user()->Id}}"><span class="icon-chevron-right"></span>User Profile</a></li>
	<li><a href="{{url('/')}}/user/siparis/{{Auth::user()->Id}}"><span class="icon-chevron-right"></span>User Siparis</a></li>
	<li><a href="{{url('/')}}/user/comments/{{Auth::user()->Id}}"><span class="icon-chevron-right"></span>User Comment</a></li>
	<li><a href="{{url('/')}}/user/favori/{{Auth::user()->Id}}"><span class="icon-chevron-right"></span>User Favori</a></li>
	<li><a href="{{url('/')}}/logout"><span class="icon-chevron-right"></span>Logout</a></li>
	
	</ul>
	@endif
</div>
</div>
@endsection