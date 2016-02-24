<nav style="background: white;" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color: #00cccc;" href="{{ URL::route('welcome') }}">Events</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a class="active" style="color: #00cccc;" href="{{ URL::route('events.showevent') }}">Events</a></li>
            <li><a href="#about" style="color: #00cccc;">About</a></li>
            
           <!-- 
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
      <li> <a href="{{ URL::route('events.event') }}" style="color: #00cccc;"><span class="glyphicon glyphicon-pencil"></span> Add Event</a></li>
         <li> <a href="{{ URL::route('admin.login') }}" style="color: #00cccc;"><span class="glyphicon glyphicon-user"></span> Admin</a></li> 
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
