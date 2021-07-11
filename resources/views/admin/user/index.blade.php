@extends('layoust.app')

@section('web_title', 'Listado de usuarios')
    

@section('title')
<i class="fa fa-fw fa-users"></i> Listado de usuarios
@endsection


@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Listado de usuarios</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
          <a href="{{ route('admin.user.create') }}" title="Crear usuario">
            <i class="fas fa-plus"></i></a>
      </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                   <th>Nombre</th>
                   <th>Correo</th>
                   <th>Usuario</th>
                   <th>Fecha Inicio</th>
                   <th>Fecha Fin</th>
               </thead> 
               <tbody>
                   @foreach ($users as $user)
                   <tr>
                        <td><a href="{{ route('admin.user.show', $user->id) }}">{{ $user->firstname }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->start_date }}</td>
                        <td>{{ $user->end_date }}</td>
                    </tr>        
                   @endforeach
                                  
               </tbody>
            </table>
        </div>
       {{ $users->render() }}
        
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer--> --}}
  </div>
@endsection