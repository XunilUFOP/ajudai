@extends('auth.base')

@section('content')
  <div class="col-md-4 col-md-offset-4"> {{-- Define a coluna de tamanho 6 mas com offset de coluna 3 --}}
        <img src="{{asset('image/logoFull.png')}}" height="300px" width="250px" class="img-responsive center-block" alt="Logotipo"/>
        <form class="form-signin" action="user/login" method="post">
          <h2 class="form-signin-heading">Login</h2>

          @if(Session::has('message'))
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              {{Session::get('message')}}
            </div>
          @endif

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="user" placeholder="Usuário">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Senha">
          </div>
          <br>
          <p class="text-center">
            <button class="btn btn-warning"  type="reset" onclick="history.go(0)"><i class="fa fa-eraser"></i> Limpar</button>
            <button class="btn" style="color: white; background: #962038;"  type="submit"><i class="fa fa-sign-in"></i> Entrar</button>
          </p>
        </form>
        <br>
        <p class="text-center">
          Não sou cadastro mas quero me <a href="{{url('signup')}}" style="color: #962038">cadastrar</a>.
        </p>
      </div>
</div>
@endsection
