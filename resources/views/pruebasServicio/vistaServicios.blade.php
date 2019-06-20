<h1>Vistas Servicios</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
            </tr>        
        </thead>
        <tbody>
            @foreach($servicio as $servicio)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$servicio->nombre_servicio}}</td>
            <td>{{$servicio->tipo_servicio}}</td>
            
            <td>
            <a href="{{ url('/pruebasServicio/'.$servicio->id.'/edit') }}">Editar</a> 
                | 
                <form method="post" action="{{url('/pruebasServicio/'.$servicio->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>  
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
