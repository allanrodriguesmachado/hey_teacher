@props([
    'type',
    'color' => 'bg-blue' | 'bg-red'
])

<button type="{{$type}}"
        class="
            text-white
            {{$color}}-700
            focus:{{$color}}-300
            font-medium rounded-lg text-sm
            px-5
            py-2.5
            me-2
            mb-2
            dark:{{$color}}-600
            dark:hover:{{$color}}-700
            focus:outline-none
            border-0
            "
>
    {{$slot}}
</button>
