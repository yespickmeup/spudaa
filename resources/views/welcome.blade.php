

@if (!Auth::guest())
@include('dashboard')
@else
@include('home')
@endif

