@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
        <h1 class="h4 mb-0">{{ __('Notifications') }}</h1>
        <div class="d-flex flex-wrap gap-2">
            @if (auth()->user()->unreadNotifications()->exists())
                <form action="{{ route('notifications.mark-all-read') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary btn-sm">{{ __('Mark all as read') }}</button>
                </form>
            @endif
            @if (auth()->user()->notifications()->exists())
                <form action="{{ route('notifications.destroy-all') }}" method="POST" class="d-inline" onsubmit="return confirm(@json(__('Delete all notifications?')))">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">{{ __('Delete all') }}</button>
                </form>
            @endif
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
    @endif

    <div class="card">
        <div class="list-group list-group-flush">
            @forelse ($notifications as $notification)
                @php
                    $data = $notification->data ?? [];
                    $message = $data['message'] ?? class_basename($notification->type);
                @endphp
                <a href="{{ route('notifications.show', $notification->id) }}"
                   class="list-group-item list-group-item-action {{ $notification->read_at ? '' : 'list-group-item-light fw-semibold' }}">
                    <div class="d-flex w-100 justify-content-between align-items-start gap-2">
                        <div>
                            <span class="small text-muted">{{ class_basename($notification->type) }}</span>
                            <p class="mb-0 mt-1">{{ $message }}</p>
                        </div>
                        <small class="text-nowrap text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                    </div>
                </a>
            @empty
                <div class="list-group-item text-muted text-center py-4">{{ __('No notifications yet.') }}</div>
            @endforelse
        </div>
    </div>

    @if ($notifications->hasPages())
        <div class="mt-3 d-flex justify-content-center">
            {{ $notifications->links() }}
        </div>
    @endif
</div>
@endsection
