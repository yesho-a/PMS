<div class="container-full">
    <div class="row">
      <div class="col-md bg-dark"  id="aside">
        <!-- sidebar -->
        <aside class="aside d-flex flex-column flex-shrink-0 p-2 text-white vh-100">
          <div>
            <div class="float-start p-1">
              <img
                src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250"
                alt="User Image"
                height="60"
                width="60"
                class="rounded-circle"
              />
            </div>
            <div class="float-start" id="name">
              <span class="name text-sm"
                ><strong>Yesho Simon</strong>
                <br />

                <i class="fa fa-circle text-success text-sm"> </i
                ><span class="m-2 text-sm"><b>Online</b></span>
              </span>
            </div>
          </div>
          <hr />
          <ul class="nav nav-pills flex-column">
            <li class="nav-header text-white" style="font-weight: bolder">General</li>
            <li class="nav-item">
              <a href="/" class="nav-link text-white pb-1">
                <i
                  class="fas fa-tachometer-alt text-white"
                  aria-hidden="true"
                ></i>
                <span class="side-icon"  style="font-weight: bolder">Dashboard</span>
              </a>
            </li>

            <li>
              <a href="/todo" class="nav-link text-white"
                ><i class="nav-icon fa fa-tasks" aria-hidden="true"></i>
                <span class="side-icon"  style="font-weight: bolder"> Tasks</span>
              </a>
            </li>
            <li>
              <a href="/project" class="nav-link text-white"
                ><i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <span class="side-icon" id="pro" style="font-weight: bolder">  Projects</span>
              </a>
            </li>
         
          </ul>
        </aside>
      </div>
      <!-- sidebar -->
      <div class="col-md-10" id="bod">
        <div class="row">
          <div class="col-md-12 px-0">
            <!-- navbar -->
            <nav
              class="navbar navbar-expand-md navbar-dark bg-dark"
              style="padding-right: 1rem"
              id="nav"
            >
              <span class="p-0" id="tog">
                <i
                  class="fas fa-bars m-2 p-0"
                  style="color: rgb(255, 255, 255); font-size: 30px"
                ></i>
              </span>
              <ul class="navbar-nav ms-auto">
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" style="font-size: larger;
                  font-weight:bolder" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a> 
    
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a  class="dropdown-item" href="/">Dashboard</a>
    
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
       
              </ul>
            </nav>
          </div>
        </div>
        <!-- navbar -->