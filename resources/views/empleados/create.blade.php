Sección para crear empleados
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="" value>
    <br/>
    <label for="apellido">{{'Apellido'}}</label>
    <input type="text" name="apellido" id="" value>
    <br/>
    <label for="correo">{{'Correo'}}</label>
    <input type="email" name="correo" id="" value>
    <br/>
    <label for="telefono">{{'Telefono'}}</label>
    <input type="text" name="telefono" id="" value>
    <br/>
    <label for="foto">{{'Foto'}}</label>
    <input type="file" name="foto" id="" value>
    <br/>
    <input type="submit" value="Agregar">
    </form>