@props(['hasFiles'=>false, 'method'=>'GET'])
<form method="{{ $method !== 'GET' ? 'POST' : 'GET' }}"
      @isset($action) action="{{ $action }}" @endisset {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes }}>
    @csrf
    @if(!in_array($method,['POST', 'GET']))
        @method($method)
    @endif

    {{ $slot }}
</form>
