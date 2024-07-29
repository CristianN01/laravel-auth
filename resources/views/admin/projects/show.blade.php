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
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection
