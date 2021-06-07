<div class="container">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <x-table-responsive>
        <div class="px-6 py-4">
            <input wire:keydown="limpiar_page" class="w-full shadow-sm form-input"
                placeholder="Ingrese el nombre de un curso...">
        </div>
        @if($courses->count())
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Nombre
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Categoria
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Status
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Role
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($courses as $course )


                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-10 h-10 rounded-full" src="{{asset($course->image->url)}}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$course->title}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$course->category}}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$course->type->name}}</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @switch($course->status)
                        @case(1)
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                            Borrador
                        </span>
                        @break
                        @case(2)
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                            Revision
                        </span>
                        @break
                        @case(3)
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Publicado
                        </span>
                        @break
                        @default

                        @endswitch

                    </td>

                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>

                @endforeach


                <!-- More people... -->
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{$courses->links()}}
        </div>
    @else
        <div class="px-6 py-4">
            No hay ningun registro coincidente
        </div>
    @endif


    </x-table-responsive>



</div>
