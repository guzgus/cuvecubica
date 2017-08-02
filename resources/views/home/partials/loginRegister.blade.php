<!--===== LOGIN =====-->
<div id="listPro">   
<section id="login" class="padding-180">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <div class="login_detail">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registrarse</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_b40 padding_t40">
              <div role="tabpanel" class="tab-pane fade in active" id="home">
                <h2>Bienvenido!</h2>
                <div class="agent-p-form">
                  <div class="row">
                    <form class="callus" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="text-white">E-Mail</label>
                        <div class="col-md-12">
                            <div class="single-query">                          
                                <input id="email" type="email" class="keyword-input" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="text-white">Contraseña</label>
                        <div class="col-md-12">
                            <div class="single-query">
                            <input id="password" type="password" class="keyword-input" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                            <button type="submit" class="btn_fill">Acceder</button>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <a  href="{{ route('password.request') }}" class="lost-pass">¿Olvidaste tu contraseña?</a>
                    </div>                                    
                    </form>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <h2>Sólo Cuvecubica</h2>
                <div class="agent-p-form">
                  <div class="row">
                    <form class="callus"  role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                    <div class="col-md-12">
                        <div class="single-query">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control keyword-input" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="single-query">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form-control keyword-input" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="single-query">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control keyword-input" name="password" required placeholder="contraseña">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                    </div>
                      
                      <div class="col-md-12  padding_b20">
                        <div class="single-query">
                          <input id="password-confirm" type="password" class="form-control keyword-input" name="password_confirmation" required placeholder="Confirma  Contraseña">
                        </div>
                      </div>

                      <div class="col-md-6">                      
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="query-submit-button">
                          <button type="submit" class="btn_fill">Crear cuenta</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<!--===== #/LOGIN =====-->

