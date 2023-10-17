@extends('layouts.plantilla')
@section('titulo','Formulario')
@section('contenido')
<h1 class="display-1 text-center text-danger mt-4">FORMS</h1>
<div class="container mt-5 col-md-6">
<div class="card text-center fw-lighter text-body fs-4">
    <div class="card-header">
      Introduce aqui tus memorias....
    </div>
    <div class="card-body text-light bg-dark">
        <form  method="POST" action="/guardarRecuerdo">
            <div class="mb-3">
              <label class="form-label">Titulo</label>
              <input type="text" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Recuerdo: </label>
              <input type="text" class="form-control">
            </div>
    </div>
    <div class="card-footer text-muted">
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-dark">Guardar Recuerdo</button>
    </form>
    </div>
  </div>
</div>
@endsection