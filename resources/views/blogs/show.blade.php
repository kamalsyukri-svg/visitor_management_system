@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog Detail') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $blog->title }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="4" readonly>{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="author" class="col-md-4 col-form-label text-md-end">Author</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $blog->author }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('blogs') }}" class="btn btn-secondary mt-3">Back to Blogs</a>
        </div>
    </div>
</div>
@endsection
