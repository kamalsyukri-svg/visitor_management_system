@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h4 mb-3">{{ __('Authentication Logs') }}</h1>
    <p class="text-muted small mb-4">{{ __('Sign-in history for your account.') }}</p>

    <div class="card">
        <div class="table-responsive mb-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">{{ __('Logged in') }}</th>
                        <th scope="col">{{ __('Logged out') }}</th>
                        <th scope="col">{{ __('IP address') }}</th>
                        <th scope="col">{{ __('Browser / device') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($logs as $log)
                        <tr>
                            <td>{{ $log->login_at?->timezone(config('app.timezone'))->format('Y-m-d H:i:s') ?? '—' }}</td>
                            <td>{{ $log->logout_at?->timezone(config('app.timezone'))->format('Y-m-d H:i:s') ?? '—' }}</td>
                            <td><code class="small">{{ $log->ip_address ?? '—' }}</code></td>
                            <td class="small text-break" style="max-width: 28rem;">{{ $log->user_agent ?? '—' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">{{ __('No authentication logs yet.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if ($logs->hasPages())
        <div class="mt-3 d-flex justify-content-center">
            {{ $logs->links() }}
        </div>
    @endif
</div>
@endsection
