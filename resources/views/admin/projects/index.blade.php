@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover table-success table-striped ">
                <thead>
                    <tr>
                        <th scope="col">
                            #
                        </th>
                        <th scope="col">
                            Title
                        </th>
                        <th scope="col">
                            Author
                        </th>
                        <th scope="col">
                            Date
                        </th>
                        <th scope="col">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                <strong>{{ $project->title }}</strong>
                            </td>
                            <td>
                                {{ $project->author }}
                            </td>
                            <td>
                                {{ $project->date }}
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success btn-sm">Edit</a>
                                {{-- <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success btn-sm">Edit</a> --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>

            {{ $projects->links(); }}
        </div>
    </div>
</div>
@endsection
