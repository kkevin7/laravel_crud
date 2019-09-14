{{$modo == 'crear' ? 'Agregar Empleaod': 'Modificar empleado'}}
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="" value="{{ isset($empleado->nombre)? $empleado->nombre: ''}}">
    <br/>
    <label for="apellido">{{'Apellido'}}</label>
<input type="text" name="apellido" id="" value="{{isset($empleado->nombre)? $empleado->apellido : ''}}">
    <br/>
    <label for="correo">{{'Correo'}}</label>
<input type="email" name="correo" id="" value="{{isset($empleado->nombre)? $empleado->correo : ''}}">
    <br/>
    <label for="telefono">{{'Telefono'}}</label>
<input type="text" name="telefono" id="" value="{{isset($empleado->nombre)? $empleado->telefono : ''}}">
    <br/>
    <label for="foto">{{'Foto'}}</label>
    @if (isset($empleado->foto))
    <img src="{{ asset('storage').'/'. $empleado->foto}}" alt="Foto" width="200">
    <br/>  
    @endif
<input type="file" name="foto" id="" value="">
<br/>
<input type="submit" value="{{$modo == 'crear'? 'Agregar':'Modificar'}}">
    <a href="{{url('/empleados')}}">Empleados</a>
    <br/>
<br/>