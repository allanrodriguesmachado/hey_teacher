@props([
    'label',
    'name'
])

<label for="{{$name}}" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">{{$label}}</label>
<textarea  id="{{$name}}" name="{{$name}}" rows="4" class="mb-3 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deixe aqui sua pergunta...">
     {{old("$name")}}
 </textarea>

@error($name)
<span class="text-red-500">{{$message}}</span>
@enderror
