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
        </div>
    </div>
</x-app-layout>
