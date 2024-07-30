@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- @if ($errors->any())
            <div class="col-12">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li class="alert alert-danger" >
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @method('POST')
                @csrf

                <div class="mb-3 text-center">
                    <h1>
                        Create new Project
                    </h1>
                </div>

                <div class="mb-3">
                    @error("title")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    @error("image")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image_Url</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>

                <div class="mb-3">
                    @error("content")
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="20"></textarea>
                </div>

                <input class="btn btn-primary btn-sm" type="submit" value="Create new Project">

                <input class="btn btn-warning btn-sm" type="reset" value="Reset">

            </form>
        </div>
    </div>
</div>
@endsection
