@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="@yield('form-action')" method="POST">
                @yield('form-method')
                @csrf

                <div class="mb-3 text-center">
                    <h1>
                        @yield('page-title')
                    </h1>
                </div>

                <div class="mb-3">
                    @error("title")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $project->title) }}">
                </div>

                <div class="mb-3">
                    @error("image")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image_Url</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{ old('title', $project->image) }}">
                </div>

                <div class="mb-3">
                    @error("content")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="20">{{ old('content', $project->content) }}</textarea>
                </div>

                <input class="btn btn-primary btn-sm" type="submit" value="@yield('page-title')">

                <input class="btn btn-warning btn-sm" type="reset" value="Reset">

            </form>
        </div>
    </div>
</div>
@endsection
