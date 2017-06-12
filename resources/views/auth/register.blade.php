@extends('layouts.app')

@section('content')

<div clas="row">
    <h5>Nuevo usuario</h5>
</div>
<div class="divider"></div>
<div class="row">
    <div class="col l4 m6 s10 offset-l4 offset-m3 offset-s1">
        <form  method="POST" action="{{ url('/newuser') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" name="name" type="text" value="">
            <label for="name">Nombre</label>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field">
            <i class="material-icons prefix">mail</i>        
            <input id="email" name="email" type="email" value="">
            <label for="email">Correo electrónico</label>
          </div>
        </div>
        <div class="row">
            <!--div class="col l2 m2 s2">
                <i class="material-icons prefix">account_circle</i>                
            </div-->
            <!--div class="col l10 m10 s10"-->
            <select id="rol" name="rol">
                <option value="" disabled selected>Elija tipo de usuario</option>
                <option value="1">Administrador</option>
                <option value="2">Monitor</option>
                <!--option value="1">Administrador</option-->   
            </select>
            <!--/div-->
        </div>
        <div id="select_departamento" class="row hide">
            <!--div class="col l2 m2 s2">
                <i class="material-icons prefix">account_circle</i>
            </div--> 
            <!--div class="col l10 m10 s10"-->
            <select id="departamento" name="departamento">     
                <option value="" disabled selected>Elija departamento</option>
                @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                @endforeach   
            </select>
            <!--/div-->                                      

        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>         
                    <input id="password" name="password" type="password" value="">
                    <label for="password">Contraseña</label>
                </div>                


            </div>
        </div>

        <div class="row center-align">
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>        
        </form>
    </div>
</div>

@endsection
