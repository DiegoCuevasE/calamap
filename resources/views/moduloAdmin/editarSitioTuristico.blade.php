<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <form action="{{ url('/sitioTuristico/'.$sitioturistico->cod_turistico)}}"method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH')}}

            <label for="cod_turistico">{{'cod_turistico'}}</label>
            <input type="text" name="cod_turistico" id="cod_turistico" value="{{ $sitioturistico->cod_turistico }}" disabled="disabled">
        
            <label for="cod_usuario">{{'cod_usuario'}}</label>
            <input type="text" name="cod_usuario" id="cod_usuario" value="{{ $sitioturistico->cod_usuario }}" disabled="disabled">
        
            <label for="nombre_turistico">{{'nombre_turistico'}}</label>
            <input type="text" name="nombre_turistico" id="nombre_turistico" value="{{ $sitioturistico->nombre_turistico }}">
        
            <label for="tipo_turistico">{{'tipo_turistico'}}</label>
            <input type="text" name="tipo_turistico" id="tipo_turistico" value="{{ $sitioturistico->tipo_turistico }}">
        
            <label for="horario_turistico">{{'horario_turistico'}}</label>
            <input type="text" name="horario_turistico" id="horario_turistico" value="{{ $sitioturistico->horario_turistico }}">
        
            <label for="direccion_turistico">{{'direccion_turistico'}}</label>
            <input type="text" name="direccion_turistico" id="direccion_turistico" value="{{ $sitioturistico->direccion_turistico }}">
        
            <label for="descripcion_turistico">{{'descripcion_turistico'}}</label>
            <input type="text" name="descripcion_turistico" id="descripcion_turistico" value="{{ $sitioturistico->descripcion_turistico }}">
        
            <label for="imagenTuristico">{{'imagenTuristico'}}</label>
            {{$sitioturistico->imagen_turistico }}
            <input type="file" name="imagenTuristico" id="imagenTuristico" value="">
            
        
            <input type="submit" value="Editar">
        
        </form>
</body>
</html>