@extends('admin.layouts.app')

@section('title', "Editar o Post {$post}")

@section('content')
    <h1>Editar o Post <strong>{{ $post->title }}</strong></h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.posts.partials.form')
    </form>
@endsection
