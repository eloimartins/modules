        <div class="alert alert-info">
            Digite o seu usuário <b>ou</b> seu e-mail <b>ou</b> seu celular e clique no botão <b><i>"Nova Senha"</i></b>.
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{route('teste2b')}}">
            {{ csrf_field() }}
            <fieldset>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuário" autofocus>
                </div>
                <div class="clearfix"></div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope red"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail">
                </div>
                <div class="clearfix"></div><br>
                <div class="input-group input-group-lg col-md-5">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone red"></i></span>
                    <input id="celular" type="text" class="form-control" name="celular" value="{{ old('celular') }}" placeholder="Celular" maxlength="15">
                </div>
                <div class="clearfix"><br></div>
                <div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3"><button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i> Nova Senha</button></div>
                </div>
                <div class="clearfix"><br><br><br><br></div>
            </fieldset>
        </form>
        Teste 2
        @if (isset($errors) AND count($errors) > 0)
            TESTE!!!
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(!empty($errors))
            TESTE 2!!!
        @endif
        @if(!empty($validator))
            TESTE 3!!!
        @endif
