Sección para crear empleados
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('empleados.form',['modo'=>'crear'])

    </form>