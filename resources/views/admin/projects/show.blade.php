@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>
                {{ $project->id }} - <strong>{{ $project->title }}</strong>
            </h1>
            <h3>
                <em>{{ $project->author }}</em>
            </h3>
            <p>
                {{ $project->date }}
            </p>
            <div class="image">
                <img src="{{ $project->image }}" alt="">
            </div>
            <p>
                {{ $project->content }}
            </p>
        </div>
        <div class="footer-buttons">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline-block">
                @method('delete')
                @csrf
                <input type="submit" class="btn btn-warning btn-sm" value="Delete">
            </form>
        </div>
    </div>
</div>
@endsection
