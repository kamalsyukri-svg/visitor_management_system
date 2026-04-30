@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                    <div class="row" mb-3>
                    <label for="name" class="col-sm-2 col-form-label">Name </label>
                    <div class="col-md6">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    </div>
                    <div class="row" mb-3>
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-md6">
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    </div>
                    <div class="row" mb-3>
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-md6-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
