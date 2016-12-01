@extends ('Admin.Template.main')

@section ('titulo','Lista de Clientes')

@section ('contenido')
<a href="{{ route ('clientes.create')}}" class="btn btn-info"> Registrar Nuevo Cliente</a> <hr>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
    </thead>
    <tbody>
        @foreach ($clientes as $client)
        <tr>
            <td>{{$client->ID}}</td>
            <td>{{$client->NOMBRE}}</td>
            <td>{{$client->TELEFONO}}</td>
            <td>{{$client->CORREO}}</td>
            <td> <a href="" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"> </span></a> 
                 <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody> 
</table>
<div class="text-center">
        {!! $clientes->render() !!}
</div>        
@endsection 

