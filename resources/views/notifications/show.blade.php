@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('notifications.index') }}" class="btn btn-link ps-0">{{ __('← Back to notifications') }}</a>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>{{ class_basename($notification->type) }}</span>
            <small class="text-muted">{{ $notification->created_at->format('Y-m-d H:i') }}</small>
        </div>
        <div class="card-body">
            @php
                $data = $notification->data ?? [];
                $message = $data['message'] ?? null;
            @endphp
            @if ($message)
                <p class="card-text mb-0">{{ $message }}</p>
            @else
                <pre class="mb-0 small bg-light p-3 rounded">{{ json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
            @endif
        </div>
        @if ($notification->read_at)
            <div class="card-footer text-muted small">
                {{ __('Read') }} {{ $notification->read_at->diffForHumans() }}
            </div>
        @endif
    </div>
</div>
@endsection
