@extends('layouts.Plantilla')
@section('Titulo','Registro')
@section('Contenido')

<h1 class="display-1 text-center text-dark mt-4">Formulario</h1>
@if (session()->has('Confirmacion'))
      <script>
          Swal.fire(
              'Libro {{ old('txtTitulo') }} se guardó correctamente',
              '{!! session('Confirmacion') !!}',
              'success'
          );
      </script>
    @endif

    @if($errors->any())
      <script>
      Swal.fire(
          'Tu Libro no se guardo, revisa los datos...',
          '{{$errors->first()}}',
          'error'
      )
      </script>
  @endif
<form method="POST" action="/GuardarLibro">
  @csrf
<div class="container text-bg-info mb-3 font-monospace" style="max-width: 40%">
  <div class="container">
  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="inputISBN" class="col-form-label">ISBN</label>
    </div>
    <div class="col-auto">
      <input type="text" name="txtISBN" id="inputISBN" class="form-control" aria-describedby="numberISBN" value="{{ old('txtISBN')}}">
      <p class="fw-bold text-danger"> {{ $errors->first('txtISBN') }} </p>
    </div>
    <div class="col-auto">
      <span id="numberISBN" class="form-text">
        Agrega entre 13-20 carácteres máximo
      </span>
    </div>
  </div>
        <div class="col-md-6">
          <label for="inputTitulo" class="form-label">Titulo del libro</label>
          <input type="text" name="txtTitulo" class="form-control" id="inputTitulo" placeholder="Escribe el Titulo del libro" value="{{ old('txtTitulo')}}">
          <p class="fw-bold text-danger"> {{ $errors->first('txtTitulo') }} </p>
        </div>
        <div class="col-md-6">
          <label for="inputAutor" class="form-label">Autor del libro</label>
          <input type="text" name="txtAutor" class="form-control" id="inputAutor" placeholder="Escribe el autor del libro" value="{{ old('txtAutor')}}">
          <p class="fw-bold text-danger"> {{ $errors->first('txtAutor') }} </p>
        </div>
        <div class="col-auto">
          <label for="inputPaginas" class="col-form-label">Páginas del libro</label>
        </div>
        <div class="col-md-2">
          <input type="text"  name="txtPaginas" id="inputPaginas" class="form-control" value="{{ old('txtPaginas')}}">
          <p class="fw-bold text-danger"> {{ $errors->first('txtPaginas') }} </p>
        </div>
          <div class="col-md-6">
            <label for="inputEditorial" class="form-label">Editorial del libro</label>
          <input type="text" name="txtEditorial" class="form-control" id="inputEditorial" placeholder="Escribe la Editorial del libro" value="{{ old('txtEditorial')}}">
          <p class="fw-bold text-danger"> {{ $errors->first('txtEditorial') }} </p>
          </div>
          <div class="col-md-6">
            <label for="inputEmailE" class="form-label">Email del Editorial</label>
          <input type="text" name="txtEmail" class="form-control" id="inputEmailE" placeholder="Escribe el Email de la editorial" value="{{ old('txtEmail')}}">
          <p class="fw-bold text-danger"> {{ $errors->first('txtEmail') }} </p>
          </div>
  <div class="col-auto mt-4">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div> 
</div>
</form>
@endsection