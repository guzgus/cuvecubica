<!-- HEADER START -->
<header id="header-top_2">
  <div class="container">
    <div class="row">
      <div class="header_set">
        <div class="col-md-12 text-right">
          <div class="get-tuch text-left">
            <i class="icon-telephone114"></i>
            <ul>
              <li><h4>(55) 2167-3371</h4></li>
              <li><a href="#." ><p class="p_14">(55) 2167-3376</p></a></li>
            </ul>
          </div>
          <div class="get-tuch text-left">
            <i class="icon-alarmclock"></i>
            <ul>
              <li><h4>09:30 - 19:00</h4></li>
              <li><p class="p_14">Lunes a Domingo</p></li>
            </ul>
          </div>
          <div class="get-tuch text-left">
            <i class=" icon-icons142"></i>
            <ul>
              <li><h4 class="p-font-17">Email</h4></li>
              <li><a href="#." ><p class="p-font-15">contacto@cuvecubica.mx</p></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-fixed no-background navbar-sticky dark bootsnav">
    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="/">
        <img src="/images/logo_center.png" width="300" class="logo logo-display" alt="">
        <img src="/images/logo-white_2.png" class="logo logo-scrolled" alt="">
        </a>
      </div><!-- End Header Navigation -->
      <div class="collapse navbar-collapse nav_bor_bot" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right nav_3" data-in="fadeInDown" data-out="fadeOutUp">
              <li><a href="/about">Sobre nosotros</a></li>
              <li><a href="/propiedades">Propiedades</a></li>
              <li class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desarrollos </a>
                <ul class="dropdown-menu">
                  @forelse ($desarrollos as $desarrollo)
                      <li><a href="/desarrollo/{{$desarrollo->id}}">{{$desarrollo->title}}</a></li>
                  @empty
                      <p>Sin desarrollos</p>
                  @endforelse                
                </ul>
              </li>
              {{--  <li><a href="contact_us.html">Contáctanos</a></li>  --}}
            @if (Auth::guest())
              <li><a href="/log">login / Registrarse</a></li>
            @else
              @if(Auth::user()->status=="1")
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Panel de gestión</a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Desarrollos</a>
                    <ul class="dropdown-menu">
                      <li><a href="/registrarDesarrollo">Registrar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Propiedades</a>
                    <ul class="dropdown-menu">
                      <li><a href="/registrarPropiedad">Registrar</a></li>
                    </ul>
                  </li>
              @if(Auth::user()->role_id=="1")
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" >Usuarios</a>
                    <ul class="dropdown-menu">
                      <li><a href="/usersList">Gestión</a></li>
                    </ul>
                  </li>
              @endif
                </ul>
              </li>
              
               @else
              <li><a href="#"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Validando cuenta</a></li>
              @endif
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif                            
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--HEADER End -->
