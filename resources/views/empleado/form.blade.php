<div class="mb-3">
    <label for="nombre" class="form-label h3">Nombre</label>
    <input type="text" value="{{$empleado->nombre}}" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="autor" class="form-label h3">Autor</label>
    <input type="text" value="{{$empleado->autor}}" class="form-control" id="autor" name="autor">
  </div>
  <div class="mb-3">
      <label for="fecha" class="form-label h3">Fecha de publicación</label>
      <input type="date" value="{{$empleado->fecha}}" class="form-control" id="fecha" name="fecha">
    </div>
    <div class="mb-3">
      <label for="editorial" class="form-label h3">Editorial</label>
      <input type="text" value="{{$empleado->editorial}}" class="form-control" id="editorial" name="editorial">
    </div>
    <div class="mb-3">
      <label for="portada" class="form-label h3">Portada</label>
      {{$empleado->portada}}
      <input type="file" value="" class="form-control" id="portada" name="portada">
    </div>
  
  <button type="submit" class="btn btn-primary fs-5">Guardar</button>