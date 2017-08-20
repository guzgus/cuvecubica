<!--===== AGENTS - 2 =====-->
<section id="agent-2" class="padding-180">
  <div class="container">
    <div class="row">
    @foreach($users as $user)
      <div class="col-md-4 col-sm-4 col-xs-12 top12 bottom20">
            <div class="item">
                <div class="image">
                    <img src="/images/user_avatar.svg" class="img-responsive"> 
                    <div class="img-info">
                    <h3>{{$user->name}}</h3>
                    <span class="text-center">
                    @if($user->status=="1")
                    Activo
                    @endif
                    @if($user->status=="0")
                    Inactivo
                    @endif
                    </span>
                    <p class="top20 ">Email: {{$user->email}}</p>
                    <p class="top20 bottom20 ">Último inicio de sesión: {{$user->updated_at}}</p>
                    @if(Auth::user()->id <> $user->id)
                        @if($user->status=="1")
                        <a href="userStatus/{{$user->id}}/0" class="link_arrow">Desactivar usuario</a>
                        @endif
                        @if($user->status=="0")
                        <a href="userStatus/{{$user->id}}/1" class="link_arrow">Activar usuario</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
      </div>
    @endforeach
    </div>    
  </div>
</section>
<!--===== #/AGENTS - 2 =====-->
