mostar empelado
<table>
      <caption>Lista de la compra</caption>
      <thead>
        <tr>
        <th>Id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Foto</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($empleados as $empleado)
        <tr>
          <td >{{$empleado->id}}</td>
          <td >{{$empleado->Nombre}}</td>
          <td >{{$empleado->Apellido}}</td>
          <td >{{$empleado->Correo}}</td>
          <td> {{$empleado->Foto}}</td>
          <td >Editar | Borrar</td>
        </tr>
        @endforeach
      </tbody>
    
    </table>