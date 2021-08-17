<x-app-layout>


    <section class="py-10 mb-8" style="background-image: url({{asset('images/homes/barra-verde.png')}})">
        <div class="container grid grid-cols-3">
            <div class="col-span-2">

                <div class="text-white ">
                    <h1 class="text-5xl">{{$course->title}}</h1>
                </div>
                <span
                    class="inline-flex items-center justify-center px-2 py-1 mt-2 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">Inscripciones
                    Abiertas</span>

            </div>
        </div>

    </section>

    <div class="container grid grid-cols-1 gap-6 lg:grid-cols-3">

        <div class="order-2 lg:col-span-2 lg-order-1">
            <div class="col-span-2">
                <section class="mb-12">

                    <h1 class="mb-2 text-3xl font-bold">Presentación</h1>
                    <div class="text-base text-gray-700">{!! html_entity_decode($course->description) !!}</div>


                </section>
                <section>
                    <article class="mb-4 shadow" x-data="{ open: false }">
                        <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                            x-on:click="open = !open">
                            <h1 class="text-lg font-bold text-gray-600">Objetivos</h1>
                        </header>
                        <div class="px-4 py-2 bg-white" x-show="open">
                            <ul>
                                @foreach($course->goals as $goal)
                                <li class="text-base text-gray-700"><i
                                        class="mr-2 text-gray-600 fas fa-check"></i>{{$goal->name}}</li>
                                @endforeach


                            </ul>
                        </div>
                    </article>
                </section>
                <section>

                    <article class="mb-4 shadow" x-data="{ open: false }">
                        <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                            x-on:click="open = !open">
                            <h1 class="text-lg font-bold text-gray-600">Destinatarios</h1>
                        </header>
                        <div class="px-4 py-2 bg-white" x-show="open">
                            <p class="text-base text-gray-700">{{$course->destination}}</p>
                        </div>
                    </article>


                </section>

                <section>
                    <article class="mb-4 shadow" x-data="{ open: false }">
                        <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                            x-on:click="open = !open">
                            <h1 class="text-lg font-bold text-gray-600">Requisitos</h1>
                        </header>
                        <div class="px-4 py-2 bg-white" x-show="open">
                            <ul>
                                @forelse($course->requirements as $requirement)
                                <li class="text-base text-gray-700">{{$requirement->name}}</li>

                                @empty
                                <li>Sin Requisitos </li>
                                @endforelse
                            </ul>
                        </div>
                    </article>
                </section>
                <section>
                    <article class="mb-4 shadow" x-data="{ open: false }">
                        <header class="px-4 py-2 bg-gray-200 border border-gray-200 cursor-pointer"
                            x-on:click="open = !open">
                            <h1 class="text-lg font-bold text-gray-600">Resoluciones</h1>
                        </header>
                        <div class="px-4 py-2 bg-white" x-show="open">
                            <ul>
                                @forelse($course->requirements as $requirement)
                                <li class="text-base text-gray-700"><i
                                        class="mr-2 fas fa-play-circle"></i>{{$requirement->name}}</li>

                                @empty
                                <li>Sin Requisitos </li>
                                @endforelse
                            </ul>
                        </div>
                    </article>
                </section>


            </div>
        </div>
        <div class="order-1 lg:order-2">
            <div class="card md:fixed md:right-20 md:top-20">
                <div class="flex">
                    <img class="object-cover w-full h-64 rounded shadow-lg" src="{{Storage::url($course->image->url)}}"
                        alt="">
                </div>

                <div class="px-6 py-4">

                    <p class="mb-2 text-gray-500 text-md">Inicio: {{$course->date_start}}</p>
                    <p class="mb-2 text-gray-500 text-md">Precio: ${{$course->price}}</p>
                    <p class="mb-2 text-gray-500 text-md">Duracion: 3 meses </p>
                    <a href="{{$course->link_inscription}}"
                        class="block px-8 py-3 mt-4 text-center text-white bg-yellow-500 border rounded hover:border-gray-500 hover:bg-white hover:text-green-900">
                        PreInscripcion
                    </a>
                    <a href="{{$course->url_info}}"
                        class="block px-8 py-3 mt-4 text-center text-green-900 border border-green-900 rounded hover:border-white hover:bg-yellow-500 hover:text-white">Informativo</a>
                </div>


            </div>
        </div>

    </div>


    <x-slot name="js">

        <script>
            var botmanWidget = {
                frameEndpoint: '/botman/chat',
                title: "Uccuyo Virtual",
                introMessage: 'Hola a Uccuyo Virtual En que podemos ayudarte?',
                mainColor: '#fd9807',
                bubbleBackground: '#fd9807',
                bubbleAvatarUrl: '../images/chatbot4.png',
                placeholderText: 'Ingresa tu consulta',
                aboutLink: 'www.evirtualsj.com',
                aboutText: 'DEV Uccuyo',
            };

        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    </x-slot>
</x-app-layout>
