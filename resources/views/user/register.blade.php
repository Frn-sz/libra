<x-layout title="Registro">

    <div class="w-full max-w-md mx-auto px-6 md:max-w-sm">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/user/register" method="POST">
            @csrf

            @if(isset($message))
                {{$message}}
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Nome</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    id="name" type="text" name="name" placeholder="Nome">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">E-mail</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    id="email" type="text" name="email" placeholder="E-mail">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Senha</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    id="password" type="password" name="password" placeholder="Senha">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">Confirme sua
                    senha</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full"
                    id="confirm_password" type="password" name="confirm_password" placeholder="Senha">
            </div>
            <div class="mt-10 flex justify-between my-auto">
                <button
                    class="bg-amber-700 hover:bg-amber-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline my-auto"
                    type="submit">Registrar
                </button>


            </div>
        </form>
    </div>

</x-layout>
