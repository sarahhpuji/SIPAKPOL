

@foreach (['success', 'danger', 'warning', 'info'] as $status)
    @if (session($status))
    <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
        
        {{ session($status) }}
      
    </div>
        
    @endif
@endforeach