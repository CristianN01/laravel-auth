@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @dump($projects)
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
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
