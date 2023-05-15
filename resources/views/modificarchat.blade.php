@extends('layouts.app')

@section('content')
<div>

            <div class="">
              <div >
                <div class="card-body p-4 p-xl-6">
                  <h2 class="text-100 text-center">Modifica tu ChatBot:</h2>
                  <form class="mb-3">
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control " id="floatingEmail" type="email" placeholder="name@example.com" />
                      <label for="floatingName">Ingresa el nombre de tu empresa:</label>
                      
                    </div>
                    <br></br>
                    <div >
                    <h3 class="text-100 text-center">Saludos del bot:</h3>
</div>
                    <div class="form-floating mb-3">

                      <input class="form-control input-box form-ensurance-header-control" id="floatingTextarea" type="text" placeholder="name@example.com" />
                      <label for="floatingPhone">Saludo</label>
                    </div>

                    <br></br>
                    <div >
                    <h3 class="text-100 text-center">Menu del bot:</h3>
</div>
<div >
<input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">Texto  /  </label>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Boton  /  </label>
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
<label for="javascript">Lista</label>
</div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control input-box form-ensurance-header-control" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                      <label for="floatingTextarea">Menu 1</label>
                    </div>
                    <div class="col-12 d-grid">
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1 " id="floatingEmail" type="email" placeholder="name@example.com" />
                      <label for="floatingName">Menu 2</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" type="tel" placeholder="name@example.com" />
                      <label for="floatingPhone">Menu 3</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" type="email" placeholder="name@example.com" />
                      <label for="floatingEmail">Menu 4</label>
                    </div>
                    <br></br>
                    <div >
                    <h3 class="text-100 text-center">Opciones del Menu:</h3>
</div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" type="text" placeholder="Insurance Category" />
                      <label for="floatingCatrgory">Menu 1 Opcion 1</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                      <label for="floatingTextarea">Menu 1 Opcion 2</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" type="text" placeholder="Insurance Category" />
                      <label for="floatingCatrgory">Menu 2 Opcion 1</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                      <label for="floatingTextarea">Menu 2 Opcion 2</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" type="text" placeholder="Insurance Category" />
                      <label for="floatingCatrgory">Menu 3 Opcion 1</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control input-box form-ensurance-header-control1" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                      <label for="floatingTextarea">Menu 3 Opcion 2</label>
                    </div>
                    <div class="col-12 d-grid">
                      <button class="btn btn-primary rounded-pill" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     
@endsection
