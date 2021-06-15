<div class="mb-4">
    {!! Form::label('title', 'Título del Curso') !!}
    {!! Form::text('title', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('title')? 'border-red-600': '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug', 'Slug del Curso') !!}
    {!! Form::text('slug', null, ['readonly'=>'readonly', 'class'=>'form-input block w-full mt-1'. ($errors->has('slug')? 'border-red-600': '')]) !!}

    @error('slug')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('description', 'Descripción del Curso') !!}
    {!! Form::textarea('description', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('description')? 'border-red-600': '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
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
        @isset($course->image)
        <img id="picture" class="object-cover object-center w-full h-64" src="{{asset($course->image->url)}}">
        @else
        <img id="picture" class="object-cover object-center w-full h-64" src="{{asset('images/cursos/9.png')}}">
        @endisset
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
