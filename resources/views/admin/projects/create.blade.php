@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="image">Image_Url</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="20"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
