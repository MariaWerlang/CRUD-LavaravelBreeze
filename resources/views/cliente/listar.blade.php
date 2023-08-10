<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">

                   
                    <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border" scope="col">Nome</th>
                                <th class="px-4 py-2 border" scope="col">Endereço</th>
                                <th class="px-4 py-2 border" scope="col">Bairro</th>
                                <th class="px-4 py-2 border" scope="col">CEP</th>
                                <th class="px-4 py-2 border" scope="col">Cidade</th>
                                <th class="px-4 py-2 border" scope="col">Estado</th>
                                <th class="px-4 py-2 border" scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if (!empty($clientes[0]))
                            @foreach ($clientes as $clientes)
                            <tr>
                                <td class="px-4 py-2 border">{{$clientes->nome}}</td>
                                <td class="px-4 py-2 border">{{$clientes->endereco}}</td>
                                <td class="px-4 py-2 border">{{$clientes->bairro}}</td>
                                <td class="px-4 py-2 border">{{$clientes->cep}}</td>
                                <td class="px-4 py-2 border">{{$clientes->cidade}}</td>
                                <td class="px-4 py-2 border">{{$clientes->estado}}</td>
                                <td class="px-4 py-2 border">

                                    <x-link-button :href="route('cliente.editar', $clientes->id)">
                                        {{ __('Editar') }}
                                    </x-link-button>

                                    </br>
                                    </br>

                                    @include('cliente.partials.delete')
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
        

</x-app-layout>