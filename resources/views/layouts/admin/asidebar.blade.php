<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
	  
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>        
        <li>
          <a href="{{url('/')}}/admin/works/{{Auth::user()->id}}">
            <i class="fa fa-home"></i> <span>Əsas Səhifə</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Istifadəçilər</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
		  
		  
		  @foreach($users as $rs)
           <li><a href="{{url('/')}}/admin/person_works/{{$rs->id}}"><i class="fa fa-circle-o"></i> {{$rs->name}}</a></li>
           @endforeach
			</ul>
        </li>
		
		<li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Həllin gözləyən tapşırıqlar</span>
          </a>
        </li>
		
		<li>
          <a href="{{url('/')}}/admin/direct_to/{{Auth::user()->id}}">
            <i class="fa fa-envelope"></i> <span>Yönləndirmələr<small class="label pull-right bg-yellow">{{$count[0]->say}}</small></span>
          </a>
        </li>
		
		<li>
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Üzvlər</span>
          </a>
        </li>
		
		<li>
          <a href="#">
            <i class="fa fa-cog"></i> <span>Parametrlər</span>
          </a>
        </li>
		
		<li>
          <a href="{{url('/')}}/admin/comments/{{Auth::user()->id}}">
            <i class="fa fa-comments-o"></i> <span>Rəylər</span>
          </a>
        </li>
		
		<li>
          <a href="{{url('/')}}/admin/suallar/{{Auth::user()->id}}">
            <i class="fa fa-question"></i> <span>Messenger</span>
          </a>
        </li>
		
      </ul>
	  
    </section>
    <!-- /.sidebar -->
  </aside>