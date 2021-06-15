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
                <div class="mb-4">
                    {!! Form::label('title', 'Título del Curso') !!}
                    {!! Form::text('title', null, ['class'=>'form-input block w-full mt-1']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('slug', 'Slug del Curso') !!}
                    {!! Form::text('slug', null, ['class'=>'form-input block w-full mt-1']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('description', 'Descripción del Curso') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-input block w-full mt-1']) !!}
                </div>

                <div class="grid gap-4 drid-cols-3">
                    <div>
                        {!! Form::label('category_id', 'Categoria') !!}
                        {!! Form::select('category_id', $categories, null, ['class'=>'form-input block w-full mt-1'])
                        !!}

                    </div>
                    <div>
                        {!! Form::label('type_id', 'Subcategoria') !!}
                        {!! Form::select('type_id', $types, null, ['class'=>'form-input block w-full mt-1']) !!}
                    </div>
                </div>
                <h1 class="mt-8 mb-2 text-2xl font-bold">Imagen del curso</h1>

                <div class="grid grid-cols-2 gap-4">
                    <figure>
                        <img id="picture" class="w-full h-64 bg-center bg-cover" src="{{asset($course->image->url)}}">
                    </figure>
                    <div>
                        <p class="mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi voluptas
                                repudiandae, pariatur deleniti iusto officiis sed recusandae quia. Explicabo ab
                                consequatur inventore maxime nesciunt, aliquam ut nam accusamus et cumque?
                        </p>
                        {!! Form::file('file', ['class'=> 'form-input w-full','id'=>'file']) !!}
                    </div>
                </div>

                <div class="flex justify-end">
                    {!! Form::submit('Actualizar Información', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

        <script>
            //Slug automático
            document.getElementById("title").addEventListener('keyup', slugChange);

            function slugChange() {

                title = document.getElementById("title").value;
                document.getElementById("slug").value = slug(title);

            }

            function slug(str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }


            //CKEDITOR

            ClassicEditor
                .create(document.querySelector('#description'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote'],
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            }
                        ]
                    }
                })
                .catch(error => {
                    console.log(error);
                });

            //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event) {
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }

        </script>
        </x-slot-name>
</x-app-layout>
