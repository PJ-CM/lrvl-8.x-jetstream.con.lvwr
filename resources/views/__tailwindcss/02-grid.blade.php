<x-guest-layout>
    <h1 class="p-4 text-4xl">
        Aloha desde TailwindCSS - Grid
    </h1>

    <div class="container p-4 mx-auto mt-2 text-center">
        <h2 class="mt-3 text-2xl">
            Grid de 3 Columnas
        </h2>
        <div class="grid grid-cols-3 gap-4 mt-4 font-bold text-white">
            <div class="bg-blue-200">1</div>
            <div class="bg-blue-400">2</div>
            <div class="bg-blue-600">3</div>
            <div class="bg-blue-800">4</div>
        </div>

        <p><strong>gap</strong> es para establecer la separación entre columnas, ya sea, las que se tenga al lado, horizontalmente, como verticalmente.</p>

        <h2 class="mt-8 text-2xl">
            Grid Responsive
        </h2>
        <div class="grid grid-cols-1 gap-4 mt-4 font-bold text-white sm:grid-cols-3">
            <div class="bg-green-200">1</div>
            <div class="bg-green-400">2</div>
            <div class="bg-green-600">3</div>
        </div>

        <h2 class="mt-8 text-2xl">
            Grid Columnas Expandidas
        </h2>
        <div class="grid grid-cols-4 gap-4 mt-4 font-bold text-white">
            <div class="col-span-2 bg-indigo-100">1</div>
            <div class="bg-indigo-300">2</div>
            <div class="bg-indigo-500">3</div>
            <div class="bg-indigo-700">4</div>
            <div class="col-span-3 bg-indigo-900">5</div>
        </div>

        <div class="grid grid-cols-12 gap-4 mt-4 font-bold text-white">
            <div class="bg-indigo-500">1</div>
            <div class="bg-indigo-500">2</div>
            <div class="bg-indigo-500">3</div>
            <div class="bg-indigo-500">4</div>
            <div class="bg-indigo-500">5</div>
            <div class="bg-indigo-500">6</div>
            <div class="bg-indigo-500">7</div>
            <div class="bg-indigo-500">8</div>
            <div class="bg-indigo-500">9</div>
            <div class="bg-indigo-500">10</div>
            <div class="bg-indigo-500">11</div>
            <div class="bg-indigo-500">12</div>
        </div>
        <div class="grid grid-cols-12 gap-4 font-bold text-white">
            <div class="col-span-3 bg-indigo-500">1</div>
            <div class="col-span-3 bg-indigo-500">2</div>
            <div class="col-span-3 bg-indigo-500">3</div>
            <div class="col-span-3 bg-indigo-500">4</div>
        </div>

        <h2 class="mt-8 text-2xl">
            Grid Columnas Start/End
        </h2>
        <div class="grid grid-cols-4 gap-4 font-bold text-white">
            <div class="col-start-2 bg-orange-400">1</div>
            <div class="col-span-4 col-end-4 bg-orange-400">2</div>
            <div class="bg-orange-400">3</div>
            <div class="px-2 py-1 bg-orange-400">4</div>
        </div>

        <h2 class="mt-8 text-2xl">
            Grid Filas
        </h2>

        <div class="grid grid-rows-4 gap-4">
            <div class="row-span-2 bg-orange-500">B</div>
            <div class="bg-orange-500">A</div>
            <div class="bg-orange-500">A</div>
            <div class="bg-orange-500">A</div>
        </div>

        <div class="grid grid-rows-6 gap-4 mt-6 font-bold text-white">
            <div class="bg-blue-500">1</div>
            <div class="bg-blue-500">2</div>
            <div class="bg-blue-500">3</div>
            <div class="row-span-3 bg-blue-500">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-500">6</div>
            <div class="bg-blue-500">7</div>
        </div>


        <h2 class="mt-8 text-2xl">
            Grid Filas
        </h2>
        <div class="grid grid-flow-col grid-rows-3 gap-4">
            <div class="row-span-3 bg-gray-400">a</div>
            <div class="row-span-1 bg-gray-700">b</div>
            <div class="row-span-2 bg-gray-100">c</div>
        </div>

        <div class="grid grid-flow-col grid-rows-3 gap-4 mt-6">
            <div class="row-span-3 bg-gray-400">a</div>
            <div class="col-span-2 row-span-1 bg-gray-700">b</div>
            <div class="col-span-2 row-span-2 bg-gray-100">c</div>
        </div>

        <div class="grid grid-cols-5 grid-rows-2 gap-4 mt-6">
            <div class="bg-yellow-200">a</div>
            <div class="bg-yellow-200">a</div>
            <div class="col-span-3 row-span-2 text-white bg-gray-700">b</div>
            <div class="bg-yellow-200">a</div>
            <div class="bg-yellow-200">a</div>
        </div>


        <h2 class="mt-8 text-2xl">
            Con Responsive
        </h2>
        <div class="grid grid-cols-1 grid-rows-5 gap-4 mt-6 sm:grid-cols-5 sm:grid-rows-2">
            <div class="bg-yellow-200">a</div>
            <div class="bg-yellow-200">a</div>
            <div class="col-span-1 row-span-1 text-white bg-gray-700 sm:col-span-3 sm:row-span-2">b</div>
            <div class="bg-yellow-200">a</div>
            <div class="bg-yellow-200">a</div>
        </div>
    </div>
</x-guest-layout>
