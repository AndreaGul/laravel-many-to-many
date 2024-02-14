@extends('layouts.admin')

@section('content')
  <h2>Aggiungi tecnologia</h2>
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
   
 <form class="row g-3 my-3" action="{{route('admin.technologies.store')}}" method="POST">
  @csrf
  <div class="col-12">
    <label for="title" class="form-label">Technologia</label>
    <input type="title" class="form-control" id="title" name="title" value="{{old('title')}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Invia</button>
  </div>
</form>
@endsection