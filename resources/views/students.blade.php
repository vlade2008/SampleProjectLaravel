@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($list_of_students as $item)
    <div>{{ $item->name }} - {{ $item->birthdate }}</div>
  @endforeach
</div>
@endsection
