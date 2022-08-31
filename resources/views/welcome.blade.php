<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    @if(isset($nombre))
        <h1>{{ $nombre }}</h1>
    @endif

    <form action="{{ route('dates.validate') }}" method="post">
        @csrf
        <h1>Formulario con validacion REGEX</h1>
        <label for="Nombre">Nombre</label><br>
        <input id="Nombre" name="Nombre" type="text"><br>

        @error('Nombre')
            <span style="color:red; font-size:18px;">{{$message}}</span>
        @enderror <br><br>


        <label for="Apellido">Apellido</label><br>
        <input id="Apellido" name="Apellido" type="text"><br>

        @error('Apellido')
            <span style="color:red; font-size:18px;">{{$message}}</span>
        @enderror <br><br>

        <label for="TypeId">Tipo de identificacion</label>
        <select name="TypeId" id="TypeId">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="Otro">Otro</option>
            <option value="Error">Error</option>
        </select><br>

        @error('TypeId')
            <span style="color:red; font-size:18px;">{{$message}}</span>
        @enderror <br><br>

        <label for="Id">identificacion</label><br>
        <input id="Id" name="Id" type="text"><br>

        @error('Id')
            <span style="color:red; font-size:18px;">{{$message}}</span>
        @enderror <br><br>

        <label for="email">Email</label><br>
        <input id="email" name="email" type="text"><br>

        @error('email')
            <span style="color:red; font-size:18px;">{{$message}}</span>
        @enderror <br><br>

        <button type="submit">Enviar</button>
    </form>
</center>
</body>
</html>
