

@extends('layouts.admin')

@section('content')

  <div class="my-3">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="list-unstyled">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
  </div>
   
 <form class="row g-3 my-3" action="{{route('admin.projects.update', $project)}}" method="POST">
  @csrf

  @method('PUT')
  
  <div class="col-12">
    <label for="title" class="form-label">Titolo</label>
    <input type="title" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}" required>
  </div>
  <div class="col-12">
    <label for="author" class="form-label">Autore</label>
    <input type="text" class="form-control" id="author" name="author" value="{{old('author', $project->author)}}"  required>
  </div>
  <div class="col-6">
    <label for="creation_date" class="form-label">Data creazione</label>
    <input type="date" class="form-control"   id="creation_date" name="creation_date" value="{{old('creation_date',$project->creation_date)}}" >
  </div>
  <div class="col-6">
    <label for="last_update" class="form-label">Ultimo commit</label>
    <input type="date" class="form-control" id="last_update"   name="last_update" value="{{old('last_update', $project->last_update)}}">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text" class="form-control"  id="description" value="{{old('description', $project->description)}}"   name="description">
  </div>
  <div class="col-12">
    <label for="contributors" class="form-label">Collaboratori</label>
    <input type="text" class="form-control" id="contributors" value="{{old('contributors', $project->contributors)}}"  name="contributors">
  </div>
  <div class="col-12">
    <label for="lang" class="form-label">Linguaggi di programmazione</label>
    <input type="text" class="form-control" id="lang" value="{{old('lang', $project->lang)}}"  name="lang">
  </div>
   <div class="col-12">
    <label for="link_github" class="form-label">link_github</label>
    <input type="text" class="form-control" id="link_github" value="{{old('link_github', $project->link_github)}}"  name="link_github">
  </div>
   <div class="col-12">
    <label for="type_id" class="form-label">Tipologia</label>
    <select class="form-select " aria-label="Default select example" name="type_id">
      <option selected>Selezionane uno</option>
      @foreach ($types as $type)
         <option value="{{ $type->id }}" @if (old('type_id',$project->type_id) == $type->id) selected @endif>
       
          {{$type->title}}
        </option>
      @endforeach
    </select>
  </div>
  
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Invia</button>
  </div>
</form>
@endsection