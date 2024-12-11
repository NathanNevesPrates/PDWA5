<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token de formulario -->
                        <!--Tamanho-->
                        <div>
                            <x-input-label for="tamanho" :value="__('Tamanho')" />
                            <x-text-input id="tamanho" class="block mt-1 w-full" type="text" name="tamanho"
                                :value="old('tamanho')" maxlenght="1" required autofocus autocomplete="tamanho" />
                            <x-input-error :messages="$errors->get('tamanho')" class="mt-2" />
                        </div>

                        <!--Sabor-->
                        <div>
                            <x-input-label for="sabor" :value="__('Sabor')" />
                            <x-text-input id="sabor" class="block mt-1 w-full" type="text" name="sabor"
                                :value="old('sabor')" maxlenght="64" required autofocus autocomplete="sabor" />
                            <x-input-error :messages="$errors->get('sabor')" class="mt-2" />
                        </div>

                        <!--Custo-->
                        <div>
                            <x-input-label for="custo" :value="__('Custo')" />
                            <x-text-input id="custo" class="block mt-1 w-full" type="text" name="custo"
                                :value="old('custo')" maxlenght="64" required autofocus autocomplete="custo" />
                            <x-input-error :messages="$errors->get('custo')" class="mt-2" />
                        </div>

                        <!--Marca-->
                        <div>
                            <x-input-label for="marca" :value="__('Marca)" />
                            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca"
                                :value="old('marca')" maxlenght="64" required autofocus autocomplete="marca" />
                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>