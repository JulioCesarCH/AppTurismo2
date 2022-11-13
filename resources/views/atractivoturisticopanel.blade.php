@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">  
                @auth
                @if(session('tipo_usuario')=="admin")
                <h3>Registro de Atractivos turisticos</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registraratrac"><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
                </div> 
                @endif
                @endauth

                <br>
                <table id="atractivos" class="table table-light table-hover">
                    <caption>Atractivos Turisticos</caption>
                    <thead class="table-dark">
                        <tr>
                            <th>imagen</th>
                            <th>nombre</th>
                            <th>descripcion</th>
                            <th>ubicacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultados as $atractivot)
                            <tr>
                            <td>{{$atractivot->imagen}}</td>
                            <td>{{$atractivot->nombre}}</td>
                            <td>{{$atractivot->descripcion}}</td>
                            <td>{{$atractivot->ubicacion}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="registraratrac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>             
          <form action="/atractivoturisticop/guardar" method="post">
             <div class="modal-body">
              <h5>Registre los datos de Atractivo Turistico</h5>
              <br>
              @csrf
                Imagen: <input class="form-control my-1" type="file" name="imagen" required><br>
                Nombre: <input class="form-control my-1" type="text" name="nombre" required><br>
                Descripcion: <textarea class="form-control my-2" placeholder="Escribe aquí la Descripcion..." name="descripcion" required></textarea><br>
                Unicacion: <textarea class="form-control my-2" placeholder="Escribe aquí la Ubicacion..." name="ubicacion" required></textarea><br>               
                
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
        $('#atractivos').DataTable();
        });
    </script>  
@endsection