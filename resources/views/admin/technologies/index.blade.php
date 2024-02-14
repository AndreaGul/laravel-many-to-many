@extends('layouts.admin')

@section('content')
  
  <button class="btn btn-primary m-2">
          <a class="text-white text-decoration-none" href="{{ route('admin.technologies.create')}}">Create</a>
  </button>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th class="text-end" scope="col">Caratteristiche</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($technologies as $technology)
    <tr class="align-middle">
      <th scope="row">{{$technology->id}}</th>
      <td>{{$technology->title}}</td>
      <td>{{$technology->slug}}</td>
     
      <td class=" d-flex justify-content-end gap-1" >
        <button class="btn  btn-info">
          <a class="text-white text-decoration-none" href="{{ route('admin.technologies.show', $technology)}}">Info</a>
        </button>
       <button class="btn  btn-success">
          <a class="text-white text-decoration-none" href="{{ route('admin.technologies.edit', $technology)}}">Edit</a>
        </button>
        <form action="{{route('admin.technologies.destroy',$technology)}}" method="POST">
          @csrf

          @method('DELETE')
          <button class="btn  btn-danger">
            <i class="fa-solid fa-xmark"></i></a>
          </button>
        </form>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection