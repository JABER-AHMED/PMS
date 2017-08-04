<header>
	
	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">PMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      @if(Sentinel::check())
        <li class="active"><a href="{{'/doctor'}}">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('patient.create')}}">Create Prescription</a></li>
        @else
        <li class="active"><a href="{{route('login')}}">Home <span class="sr-only">(current)</span></a></li>
        @endif
      </ul>
    <ul class="nav navbar-nav navbar-right">
    @if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'doctor')
      <a href="{{route('admin')}}" class="btn btn-primary">Go To Admin</a>
      @endif
      @if(Sentinel::check())
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Sentinel::getUser()->username}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="{{route('logout')}}" method="post" id="logout-form">
             {{csrf_field()}}
            <li><a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
          </form>
          </ul>
        </li>
        @else
        <li><a href=""></a></li>
        <li><a href="{{route('login')}}" class="btn btn-default">SignIn</a></li>
        <li><a href="{{route('register')}}" class="btn btn-default">SignUp</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>