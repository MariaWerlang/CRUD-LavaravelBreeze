<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('cliente.update', $clientes->id) }}">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" maxlength="255" class="block mt-1 w-full" type="text" name="nome" :value="old('nome', $clientes->nome)" required autofocus autocomplete="..." />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="endereco" :value="__('Endereço')" />
                        <x-text-input id="endereco" maxlength="255" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco', $clientes->endereco)" required autocomplete="..." />
                        <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bairro" :value="__('Bairro')" />
                        <x-text-input id="bairro" maxlength="255" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro', $clientes->bairro)" required autocomplete="..." />
                        <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cep" :value="__('CEP')" />
                        <x-text-input id="cep" minlength="8" maxlength="9" class="block mt-1 w-full" type="text" name="cep" :value="old('cep', $clientes->cep)" required autocomplete="..." />
                        <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="cidade" :value="__('Cidade')" />
                        <x-text-input id="cidade" maxlength="255" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade', $clientes->cidade)" required autocomplete="..." />
                        <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="estado" :value="__('Estado')" />
                        <x-text-input id="estado" maxlength="255" class="block mt-1 w-full" type="text" name="estado" :value="old('estado', $clientes->estado)" required autocomplete="..." />
                        <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Editar') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>