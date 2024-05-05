<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Question') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form :action="route('question.store')" method="POST">
                <x-textarea name="question" text_label="Question">Ask your question?</x-textarea>

                <div class="flex justify-end">
                    <x-btn type="submit" color="bg-blue">Save</x-btn>
                    <x-btn type="reset" color="bg-red">cancel</x-btn>
                </div>
            </x-form>

            <hr class="border-gray-600 my-2">

            <h1 class="dark:text-gray-500 uppercase font-bold mb-2">List of questions</h1>

            <div class="dark:text-gray-400 space-y-6">
                @foreach($questions AS $question)
                    <x-question :question="$question" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
