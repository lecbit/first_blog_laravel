@extends ('layout')

@section('content')
<p>Главная </p>
<ul>
    @foreach($tasks as $task)
    <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection