<x-layout title="Login">

    <div class="w-full max-w-md mx-auto px-6 md:max-w-sm">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/user/login" method="POST">
            @csrf
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
            <div class="mt-10 flex justify-between my-auto">
                <button
                    class="bg-amber-700 hover:bg-amber-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline my-auto"
                    type="button">Realizar Login
                </button>


                <a class="inline-block align-baseline font-bold text-sm text-amber-700 hover:text-amber-800"
                   href="#">Esqueceu
                    a senha?</a>

            </div>
        </form>
    </div>

</x-layout>
