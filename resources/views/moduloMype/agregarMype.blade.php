
<html lang="es">
<form action="{{ url('/moduloMype')}}" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
        <h1>Agregar Mype</h1>
        <label for="Nombre de Fantasia">{{'Nombre de Fantasia'}}</label>
        <input type="text" name="nombre_fantasia_mype" id="Nombre_Fantasia_mype" value="">
        <br/>
        <label for="Razón Social">{{'Razón Social'}}</label>
        <select name="razon_social_mype" id="razon_social_mype">
            <option value="Gastronómica">Gastronómica</option>
            <option value="Hotelera">Hotelera</option>
            <option value="Turistica">Turística</option>
        </select>
        <br/>
        <label for="Dirección">{{'Dirección'}}</label>
        <input type="text" name="direccion_mype" id="direccion_mype" value="">
        <br/>
        <label for="Descripción">{{'Descripción'}}</label><br/>
        <textarea name="descripcion_mype" id="descripcion_mype" cols="30" rows="10"></textarea>
        <br/>
        <label for="Horario">{{'Horario'}}</label>
        <input type="text" name="horario_mype" id="horario_mype">
        <br/>
        <input type="hidden" id="estado_mype" name="estado_mype" value="1">
        <label for="Teléfono">{{'Teléfono'}}</label>
        <input type="text" name="telefono_mype" id="telefono_mype" value="">
        <br/>
        <label for="Celular">{{'Celular'}}</label>
        <input type="text" name="celular_mype" id="celular_mype" value="">
        <br/>
        <label for="Correo">{{'Correo'}}</label>
        <input type="email" name="correo_mype" id="correo_mype" value="">
        <br/>
        <label for="Página(Opcional)">{{'Página(Opcional)'}}</label>
        <input type="url" name="pagina_mype" id="pagina_mype" value="">
        <br/>
        <label for="Red Social(Opcional)">{{'Red Social(Opcional)'}}</label>
        <input type="url" name="red_social_mype" id="red_social_mype" value="">
        <br/>
        <input type="file" name="enlace_imagen_mype" id="enlace_imagen_mype">
        <br/>
        <input type="hidden" id="tipo_imagen_mype" name="tipo_imagen_mype" value="logo">

        <input type="submit" value="Agregar">
    </form>
</html>



