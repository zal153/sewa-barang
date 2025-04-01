<div class="toast-container" style="position: absolute; top: 0; right: 0;">

    <!-- Then put toasts within -->
    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="{{ asset($image) }}" alt="brand-logo" height="16" class="me-1" />
            <strong class="me-auto">{{ $title }}</strong>
            <small class="text-muted">{{ $time }}</small>
            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
</div>
