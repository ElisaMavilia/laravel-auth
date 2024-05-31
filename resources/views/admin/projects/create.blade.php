@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')

<section>
    <h2>Create new Project</h2>
    <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="container mb-3 mt-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          <div class="mb-3">
            <label for="content" class="form-label @error('title') is-invalid @enderror">Content</label>
           <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{old('content')}}</textarea>
           @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
    </form>
</section>
@endsection