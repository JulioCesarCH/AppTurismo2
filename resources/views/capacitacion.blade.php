@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
                @auth
                @if(session('tipo_usuario')=="admin")
                <h3>Registro de Capacitaciones</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarCap"><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
                </div> 
                @endif
                @endauth

                <br>
                <table id="capacitaciones" class="table table-light table-hover">
                    <caption>Capacitaciones</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultados3 as $capacitacion)
                            <tr>
                            <td>{{$capacitacion->id}}</td>
                            <td>{{$capacitacion->descripcion}}</td>
                            <td>{{$capacitacion->fecha}}</td>
                            <td>{{$capacitacion->hora}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="registrarCap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>             
          <form action="/productos/guardar" method="post">
             <div class="modal-body">
              <h5>Registre los datos de Capacitacion</h5>
              <br>
              @csrf
                Descripcion: <textarea class="form-control my-2" placeholder="Escribe aquí el Tema..." name="descripcion" required></textarea><br>
                Fecha: <input class="form-control my-1" type="date" name="fecha" required><br>
                Hora: <input class="form-control my-1" type="time" name="hora" required><br>
                
                <label for="exampleFormControl1" class="form-label">Seleccione Actividad</label>
                <select class="form-select" name="actividadcapacitacion_id">
                    @foreach ($resultados as $actividad)
                        <option value={{$actividad->id}}>{{$actividad->nombre}}</option>;
                    @endforeach
                </select>
                <label for="exampleFormControl1" class="form-label">Seleccione Servicio</label>
                <select class="form-select" name="servicio_id">
                    @foreach ($resultados2 as $servicio)
                        <option value={{$servicio->id}}>{{$servicio->nombre}}</option>;
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
      </div>
    </div>
</div>

@endsection

@section("scripts")
    <script>
        $(document).ready(function () {
        $('#capacitaciones').DataTable();
        });
    </script>  
@endsection