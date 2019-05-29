@extends('plantilla')



@section('contenido')

<div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('template2/images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Unete al Sitio</h1>
              <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Booking</span></div>
              
            </div>
          </div>
        </div>
      </div>  




<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nombre de Usuario</label>
                  <input type="text" id="fname" class="form-control" placeholder="Nombre de usuario">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Contraseña</label>
                  <input type="password" id="lname" class="form-control" placeholder="Contraseña">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="pass">Confirmar contraseña</label> 
                  <input type="password" id="pass" class="form-control" placeholder="Contraseña">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="treatment">Fecha de nacimiento</label> 
                  <input type="text" id="email" class="form-control datepicker px-2" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="genero">Género</label></br>
                  <input type="radio" name="genero" value="0" checked> Hombre<br>
                  <input type="radio" name="genero" value="1"> Mujer<br>
                  <input type="radio" name="genero" value="other"> Otre
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">Nacionalidad</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value="">Japan</option>
                    <option value="">Europe</option>
                    <option value="">China</option>
                    <option value="">France</option>
                    <option value="">Philippines</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Registrarse" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            
            
            <div class="p-4 mb-3 bg-white">
              <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>

@endsection