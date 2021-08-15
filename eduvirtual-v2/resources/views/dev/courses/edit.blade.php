<x-app-layout>
    <div class="container grid grid-cols-5 py-8">
        <aside>
            <h1 class="mb-4 text-lg font-bold">Edición del Curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="pl-2 mb-1 leading-7 border-l-4 border-indigo-400"><a href="">Información del Curso</a></li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent"><a href="">Presentación</a></li>
                <li class="pl-2 mb-1 leading-7 border-l-4 border-transparent"><a href="">Objetivos</a></li>
            </ul>
        </aside>

        <div class="col-span-4 card">
            <div class="text-gray-600 card-body">
                <h1 class="text-2xl font-bold">Información del curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route'=>['dev.courses.update',$course],'method'=>'put','files'=> true]) !!}
                @include('dev.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar Información', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

        <script src="{{asset('js/dev/courses/form.js')}}"></script>
        </x-slot-name>
</x-app-layout>
