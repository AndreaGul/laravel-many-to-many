@extends('layouts.admin')

@section('content')
  <ul class="list-unstyled">
      @foreach ($technology->projects as $project)
      <li>
        <ul class="m-2 ">
          <li>Titolo: {{$project->title}}</li>
          <li>Autore: {{$project->author}}</li>
        </ul>
      </li>
       
      @endforeach
  </ul>
@endsection