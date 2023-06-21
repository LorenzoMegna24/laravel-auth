@extends('layouts.projectlayout')

@section('title')
   Laravel | Project
@endsection

@section('content')
<h1>Tutti i progetti</h1>

<a class="btn btn-primary my-3" href="{{route('admin.projects.create')}}">Inserisci nuovo progetto</a>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Project Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $elem)
    <tr>
      <th scope="row">{{$elem->id}}</th>
      <td>{{$elem->project_title}}</td>
      <td>{{$elem->slug}}</td>
      <td>
        <a href="{{route('admin.projects.show', $elem)}}">Show</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection