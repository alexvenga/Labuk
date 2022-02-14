@props(['hasFiles'=>false, 'method'=>'GET'])
@php $method = \Str::upper($method) @endphp
<form method="{{ $method !== 'GET' ? 'POST' : 'GET' }}"
      @isset($action) action="{{ $action }}" @endisset {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes }}>
    @if(!in_array($method,['GET']))
        @csrf
    @endif
    @if(!in_array($method,['POST', 'GET']))
        @method($method)
    @endif

    {{ $slot }}
</form>
