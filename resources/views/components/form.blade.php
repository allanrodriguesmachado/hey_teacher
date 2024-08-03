@props([
    'action',
    'methods' => 'post'
])

<form class="mb-4" action="{{$action}}" method="{{$methods}}">
@csrf
    {{$slot}}
</form>
