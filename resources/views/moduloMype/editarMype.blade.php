<form action="{{ url('/moduloMype/' . $mype->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <label for="Nombre de Fantasia">{{'Nombre de Fantasia'}}</label>
    <input type="text" name="nombre_fantasia_mype" id="Nombre_Fantasia_mype" value="{{ $mype->nombre_fantasia_mype }}">
    <br/>
    <label for="Razón Social">{{'Razón Social'}}</label>
    <select name="razon_social_mype" id="razon_social_mype">
            <option value="Gastronomía">Gastronomía</option>
            <option value="Hotelería">Hoteleíra</option>
            <option value="Turismo">Turismo</option>
            <option value="Bazares">Bazares</option>
            <option value="Artesanía">Artesanía</option>
        </select>
    <br/>
    <label for="Dirección">{{'Dirección'}}</label>
    <input type="text" name="direccion_mype" id="direccion_mype" value="{{ $mype->direccion_mype }}">
    <br/>
    <label for="Descripción">{{'Descripción'}}</label><br/>
    <textarea name="descripcion_mype" id="descripcion_mype" cols="30" rows="10">{{ $mype->descripcion_mype }}</textarea>
    <br/>
    <label for="Horario">{{'Horario'}}</label>
    <label for="Horario">{{'Horario'}}</label>
        <select name="d1" id="d1">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miércoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sábado">Sabado</option>
            <option value="Domingo">Domingo</option>
        </select>
        <label for=" a ">{{' a '}}</label>
        <select name="d2" id="d2">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miércoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sábado">Sabado</option>
            <option value="Domingo">Domingo</option>
        </select>
        <label for=" de ">{{' de '}}</label>
        <select name="h1" id="h1">
            <option value="00:00">00:00</option>
            <option value="00:30">00:30</option>
            <option value="01:00">01:00</option>
            <option value="01:30">01:30</option>
            <option value="02:00">02:00</option>
            <option value="02:30">02:30</option>
            <option value="03:00">03:00</option>
            <option value="03:30">03:30</option>
            <option value="04:00">04:00</option>
            <option value="04:30">04:30</option>
            <option value="05:00">05:00</option>
            <option value="05:30">05:30</option>
            <option value="06:00">06:00</option>
            <option value="06:30">06:30</option>
            <option value="07:00">07:00</option>
            <option value="07:30">07:30</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
            <option value="22:00">22:00</option>
            <option value="22:30">22:30</option>
            <option value="23:00">23:00</option>
            <option value="23:30">23:30</option>       
        </select>
        <label for=" Hrs a ">{{' Hrs a '}}</label>
        <select name="h2" id="h2">
            <option value="00:00">00:00</option>
            <option value="00:30">00:30</option>
            <option value="01:00">01:00</option>
            <option value="01:30">01:30</option>
            <option value="02:00">02:00</option>
            <option value="02:30">02:30</option>
            <option value="03:00">03:00</option>
            <option value="03:30">03:30</option>
            <option value="04:00">04:00</option>
            <option value="04:30">04:30</option>
            <option value="05:00">05:00</option>
            <option value="05:30">05:30</option>
            <option value="06:00">06:00</option>
            <option value="06:30">06:30</option>
            <option value="07:00">07:00</option>
            <option value="07:30">07:30</option>
            <option value="08:00">08:00</option>
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
            <option value="22:00">22:00</option>
            <option value="22:30">22:30</option>
            <option value="23:00">23:00</option>
            <option value="23:30">23:30</option>       
        </select>
        <label for=" Hrs ">{{' Hrs '}}</label>
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
    <label for="Facebook(Opcional)">{{'Facebook(Opcional)'}}</label>
    <input type="url" name="facebook_mype" id="facebook_mype" value="{{ $mype->facebook_mype }}">
    <br/>
    <label for="Instagram(Opcional)">{{'Instagram(Opcional)'}}</label>
    <input type="url" name="instagram_mype" id="instagram_mype" value="{{ $mype->instagram_mype }}">
    <br/>
    <label for="Otra Red Social(Opcional)">{{'Otra Red Social(Opcional)'}}</label>
    <input type="url" name="otra_redS_mype" id="otra_redS_mype" value="{{ $mype->otra_redS_mype }}">
    <br/>

    
    <input type="submit" value="Editar">
</form>        
