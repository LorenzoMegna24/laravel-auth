@extends('layouts.projectlayout')

@section('title')
   Laravel | Project
@endsection

@section('content')
<h1>Tutti i progetti</h1>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Project Title</th>
      <th scope="col">Slug</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $elem)
    <tr>
      <th scope="row">{{$elem->id}}</th>
      <td>{{$elem->project_title}}</td>
      <td>{{$elem->slug}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection