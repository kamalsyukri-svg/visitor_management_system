@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Detail') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="created_at" class="col-md-4 col-form-label text-md-end">Created At</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{ $user->created_at }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('users') }}" class="btn btn-secondary mt-3">Back to Users</a>
        </div>
    </div>
</div>
@endsection
