Incio (Despliege de datos)
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$empleado->foto}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellid}}</td>
        <td>{{$empleado->correo}}</td>
        <td>{{$empleado->telefono}}</td>
            </tr> 
        @endforeach
        
    </tbody>
</table>