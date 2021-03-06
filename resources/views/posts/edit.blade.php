@php
    $title = __('Edit') . ': ' . $post->title;
@endphp
@extends('layouts.my')
@section('content')
<h1>{{ $title }}</h1>
<form action="{{ url('posts/'.$post->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="title">{{ __('Title') }}</label>
        <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required autofocus>
    </div>
    <div class="form-group">
        <label for="body">{{ __('Body') }}</label>
        <textarea id="body" class="form-control" name="body" rows="8" required>{{ $post->body }}</textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">{{ __('Submit') }}</button>
</form>
@endsection
