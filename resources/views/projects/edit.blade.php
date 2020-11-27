@extends('layout')

@section('content')
    <h1>Edit Project</h1>
    <form method="POST" action="/blog/public/projects/{{$project->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}
    <div>
        <input type="text" name="title" value="{{$project->title}}">
    </div>
    <div>
        <textarea name="description">{{$project->description}}</textarea>
    </div>
    <div>
        <button type="submit" name="button">Update project</button>
    </div>
    </form>
    
    <form method="POST" action="/blog/public/projects/{{$project->id}}">
        @method('DELETE')
        @csrf
    <div>
        <button type="submit" name="button">Delete project</button>
    </div>
    </form>
@endsection