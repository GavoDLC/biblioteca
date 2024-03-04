<div class="mb-3">
    <label for="nombre" class="form-label h3">Nombre</label>
    <input type="text" value="{{ isset($empleado->nombre) ? $empleado->nombre : ''}}" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="autor" class="form-label h3">Autor</label>
    <input type="text" value="{{ isset($empleado->autor) ? $empleado->autor : ''}}" class="form-control" id="autor" name="autor">
  </div>
  <div class="mb-3">
      <label for="fecha" class="form-label h3">Fecha de publicación</label>
      <input type="date" value="{{ isset($empleado->fecha) ? $empleado->fecha : ''}}" class="form-control" id="fecha" name="fecha">
    </div>
    <div class="mb-3">
      <label for="editorial" class="form-label h3">Editorial</label>
      <input type="text" value="{{isset($empleado->editorial) ? $empleado->editorial : ''}}" class="form-control" id="editorial" name="editorial">
    </div>
    <div class="mb-3">
      <label for="portada" class="form-label h3">Portada
        <br>
        @if(isset($empleado->portada))
        <img src="{{asset('storage').'/'.$empleado->portada}}" alt="" width="60%">
        @endif
      </label>
      
      <input type="file" value="" class="form-control" id="portada" name="portada">
    </div>
    <a href="{{url('empleado/')}}" class="btn bg-danger ">Regresar</a>

  <button type="submit" class="btn btn-primary fs-5">Guardar</button>
