<x-guest-layout>
    <div class="container p-4 mx-auto mt-5 text-center">
        <h1 class="text-4xl text-info-100 bg-info-400">
            Flexbox
        </h1>

        <h3 class="mt-6 ml-6 text-2xl text-left">Contenedor y Contenido sin Flexbox</h3>
        <div>
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <hr class="mt-12">

        <h3 class="mt-8 ml-6 text-2xl text-left">Contenedor(es) y Contenido(s) con Flexbox</h3>

        <h4 class="mt-6 ml-6 text-xl text-left">flexbox-direction</h4>
        <div class="flex flex-col-reverse bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left">flexbox-wrap</h4>
        <div class="flex flex-wrap bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left">justify-content</h4>
        <div class="flex flex-wrap justify-between bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">align-items</h4>
        <div class="flex flex-wrap items-center justify-around h-64 bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">align-content (como el "justify-content", pero en el eje vertical - siempre se debe incluir el "flex-wrap en el padre")</h4>
        <div class="flex flex-wrap content-center h-64 bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">align-self (alinear en vertical un determinado elemento hijo - necesario el "items-start en el padre")</h4>
        <div class="flex flex-wrap items-start h-64 bg-yellow-200">
            <div class="p-4 m-2 bg-orange-500">1</div>
            <div class="self-end p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">flex-1 (por defecto, el tamaño de un hijo viene dado por el tamaño de su contenido - asignando esta propiedad ocupará todo el espacio libre disponible)</h4>
        <div class="flex flex-wrap items-start h-64 bg-yellow-200">
            <div class="flex-1 p-4 m-2 bg-orange-500">1</div>
            <div class="self-end p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">flex-1 (por defecto, el tamaño de un hijo viene dado por el tamaño de su contenido - asignando esta propiedad ocupará todo el espacio libre disponible)</h4>
        <div class="flex flex-wrap items-start h-64 bg-yellow-200">
            <div class="flex-1 p-4 m-2 bg-orange-500">1</div>
            <div class="self-end p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>

        <h4 class="mt-6 ml-6 text-xl text-left ">flex-none (por defecto, el tamaño de un hijo viene dado por el tamaño de su contenido - asignando esta propiedad se previene para que ni crezca (grow), ni se estreche (shrink), sino que se adapte al tamaño de su contenido)</h4>
        <div class="flex flex-wrap items-start h-64 bg-yellow-200">
            <div class="flex-1 p-4 m-2 bg-orange-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dicta ipsam, ex aspernatur dolorum adipisci labore, recusandae obcaecati odio vel culpa similique omnis tenetur velit vitae, accusamus sunt iusto repellat?</div>
            <div class="self-end p-4 m-2 bg-orange-500">2</div>
            <div class="p-4 m-2 bg-orange-500">3</div>
        </div>
    </div>
</x-guest-layout>
