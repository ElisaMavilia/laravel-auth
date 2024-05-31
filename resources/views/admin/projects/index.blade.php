@extends('layouts.admin')


@section('content')
<main class="container mt-4">
    <h1 class="pt-5 pb-3">Projects</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                    <tr class="table table-striped-columns">
                        
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->content}}</td>
                        <td scope="row">{{$project->slug}}</td>
                    </tr>
                </tbody>
            @endforeach
    </table>
    </div>
</main>

@endsection