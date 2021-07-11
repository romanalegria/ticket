@extends('layoust.app')

@section('web_title', 'Creaciòn de Usuario')
    

@section('title')
<i class="fa fa-fw fa-user-plus"></i> Creaciòn del usuario
@endsection

@section('content')
{{!! Form::open(['route' => 'admin.user.store','method' => 'post']) !!}}
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Creaciòn de usuario</h3>
            </div>
            <div class="card-body">      
                <div class="row">
                    <div class="col-12  col-md-6">
                        {!! Field::text('Nombres', ['required' => true,'placeholder' => 'Nombres']) !!}                       
                    </div>
                    <div class="col-12 col-md-6">
                        {!! Field::text('Apellidos', ['placeholder' => 'Apellidos']) !!}
                    </div>
                    <div class="col-12  col-md-6">
                        {!! Field::email('Email', ['required' => true,'placeholder' => 'Email']) !!}
                    </div>
                    <div class="col-12  col-md-6">
                        {!! Field::text('Usuario', ['required' => true,'placeholder' => 'Nombre de usuario']) !!}
                    </div>
                    <div class="col-12  col-md-6">
                        {!! Field::date('Fecha Inicio', ['placeholder' => 'Fecha Inicio']) !!}
                    </div>
                </div>        
            </div>    
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-right">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-outline-danger">Cancelar</a>
                    <button type="submit" class="ml-2 btn btn-success">Grabar</button>
                </div>        
            </div>
            </div>
    {{!! Form::close() !!}}
  @endsection

