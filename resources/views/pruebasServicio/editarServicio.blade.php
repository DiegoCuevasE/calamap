<form action="{{ url('/pruebasServicio/').$servicio->id }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <h1>Editar Servicio</h1>
    <label for="Nombre de Servicio">{{'Nombre de Servicio'}}</label>
    
<input type="text" name="nombre_servicio" id="Nombre_servicio" value="{{ $servicio->nombre_servicio }}">
    <br/>
    <label for="Tipo">{{'Tipo'}}</label>
    <select name="tipo_servicio" id="tipo_servicio">
        <option value="Gastronómica">Gastronómica</option>
        <option value="Hotelera">Hotelera</option>
        <option value="Turistica">Turística</option>
        <option value="Bazares">Bazares</option>
    </select>
    <input type="submit" value="Editar">
</form>