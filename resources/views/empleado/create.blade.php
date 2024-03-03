<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container col-4 text-center">

        <form action="{{url("/empleado")}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('empleado.form')
          </form>
    </div>
</body>
</html>