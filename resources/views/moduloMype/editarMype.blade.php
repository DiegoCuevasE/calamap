<form action="{{ url('/moduloMype/' . $mype->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

        <label for="Nombre de Fantasia">{{'Nombre de Fantasia'}}</label>
        <input type="text" name="nombre_fantasia_mype" id="Nombre_Fantasia_mype" value="{{ $mype->nombre_fantasia_mype }}">
        <br/>
        <label for="Razón Social">{{'Razón Social'}}</label>
        <select name="razon_social_mype" id="razon_social_mype">
        <option value="Gastronómica">Gastronómica</option>
        <option value="Hotelera">Hotelera</option>
        <option value="Turistica">Turística</option>
    </select>
    <br/>
    <label for="Dirección">{{'Dirección'}}</label>
    <input type="text" name="direccion_mype" id="direccion_mype" value="{{ $mype->direccion_mype }}">
    <br/>
    <label for="Descripción">{{'Descripción'}}</label><br/>
    <textarea name="descripcion_mype" id="descripcion_mype" cols="30" rows="10">{{ $mype->descripcion_mype }}</textarea>
    <br/>
    <label for="Horario">{{'Horario'}}</label>
    <input type="text" name="horario_mype" id="horario_mype" value="{{ $mype->horario_mype }}">
    <br/>
    <input type="hidden" id="Estado_mype" name="Estado_mype" value="0">
    <label for="Teléfono">{{'Teléfono'}}</label>
    <input type="text" name="telefono_mype" id="telefono_mype" value="{{ $mype->telefono_mype }}">
    <br/>
    <label for="Celular">{{'Celular'}}</label>
    <input type="text" name="celular_mype" id="celular_mype" value="{{ $mype->celular_mype }}">
    <br/>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="correo_mype" id="correo_mype" value="{{ $mype->correo_mype }}">
    <br/>
    <label for="Página(Opcional)">{{'Página(Opcional)'}}</label>
    <input type="url" name="pagina_mype" id="pagina_mype" value="{{ $mype->pagina_mype }}">
    <br/>
    <label for="Red Social(Opcional)">{{'Red Social(Opcional)'}}</label>
    <input type="url" name="red_social_mype" id="red_social_mype" value="{{ $mype->red_social_mype }}">
    <br/>
    <input type="submit" value="Editar">
</form>        
