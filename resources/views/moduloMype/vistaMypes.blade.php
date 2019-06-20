
    <h1>Vistas</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Razon Social</th>
                <th>Dirección</th>
                <th>Descripción</th>
                <th>Horario</th>
                <th>Estado</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Página</th>
                <th>Red Social</th>
                <th>Acciones</th>
            </tr>        
        </thead>
        <tbody>
            @foreach($mype as $mype)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$mype->nombre_fantasia_mype}}</td>
            <td>{{$mype->razon_social_mype}}</td>
            <td>{{$mype->direccion_mype}}</td>
            <td>{{$mype->descripcion_mype}}</td>
            <td>{{$mype->horario_mype}}</td>
            <td>{{$mype->estado_mype}}</td>
            <td>{{$mype->telefono_mype}}</td>
            <td>{{$mype->celular_mype}}</td>
            <td>{{$mype->correo_mype}}</td>
            <td>{{$mype->pagina_mype}}</td>
            <td>{{$mype->red_social_mype}}</td>
            <td>
            <a href="{{ url('/moduloMype/'.$mype->id.'/edit') }}">Editar</a> 
                | 
                <form method="post" action="{{url('/moduloMype/'.$mype->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>  
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
