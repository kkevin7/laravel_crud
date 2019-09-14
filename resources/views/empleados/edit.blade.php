Sección para editar empleados
<form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="" value="{{$empleado->nombre}}">
    <br/>
    <label for="apellido">{{'Apellido'}}</label>
<input type="text" name="apellido" id="" value="{{$empleado->apellido}}">
    <br/>
    <label for="correo">{{'Correo'}}</label>
<input type="email" name="correo" id="" value="{{$empleado->correo}}">
    <br/>
    <label for="telefono">{{'Telefono'}}</label>
<input type="text" name="telefono" id="" value="{{$empleado->telefono}}">
    <br/>
    <label for="foto">{{'Foto'}}</label>
    {{$empleado->foto}}
    <br/>
<input type="file" name="foto" id="" value="">
    <br/>
    <input type="submit" value="Editar">
    </form>