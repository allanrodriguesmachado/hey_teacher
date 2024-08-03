<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <x-form method :action="route('question.store')" >
                    <x-textarea label="Digite sua pergunta" name="question"/>

                    <div class="flex justify-end">
                        <x-btn.cancel name="Cancelar" />
                        <x-btn.submit type="submit" name="Enviar" />
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</x-app-layout>
