hola soy el formulario create
<form action="{{url('/empleado')}}" method="post" ectype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre">
<br>
<label for="Nombre">Apellido</label>
<input type="text" name="Apellido">
<br>
<label for="Nombre">Correo</label>
<input type="text" name="Correo">
<br>
<label for="Nombre">Foto</label>
<input type="file" name="foto">
<br>
<input type="submit" value="Enviar">
</form>