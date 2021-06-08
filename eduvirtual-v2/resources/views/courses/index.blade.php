<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('images/homes/portada-2.png')}})">
        <div class="px-4 max-w-7x1 max-auto sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl text-green-900 font-fold">Estudiá Online en la Uccuyo </h1>
                <p class="mt-2 mb-4 text-lg text-green-800"> Ofrecemos Capacitaciones a Distancia</p>


               @livewire('search')

            </div>
        </div>

    </section>

    @livewire('courses-index')
</x-app-layout>
