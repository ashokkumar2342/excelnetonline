 
  <nav class="main-header navbar navbar-expand navbar-navy navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:#fff"></i></a>
      </li>
          
    </ul> 
    <ul class="navbar-nav ml-auto">       
      <li class="nav-item">
        <a class="btn btn-sm" style="color:#fff" title="Logout" href="{{ route('admin.logout.get') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('admin.logout.get') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
