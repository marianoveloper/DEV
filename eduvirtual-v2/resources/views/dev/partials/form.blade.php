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
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('description')? 'border-red-600': '')]) !!}

    @error('description')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('destination', 'Destinatarios') !!}
    {!! Form::text('destination', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('destination')? 'border-red-600': '')]) !!}

    @error('destination')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="grid grid-cols-3 gap-4">
<div class="mb-4">
    {!! Form::label('duration', 'Duración') !!}
    {!! Form::text('duration', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('duration')? 'border-red-600': '')]) !!}

    @error('duration')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('date_start', 'Fecha de Inicio') !!}
{!! Form::date('date_start',null, ['class'=>'form-input block w-full mt-1'. ($errors->has('date_start')? 'border-red-600': '')]) !!}

    @error('date_start')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('date_limit', 'Fecha Limite') !!}
{!! Form::date('date_limit', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('date_limit')? 'border-red-600': '')]) !!}

    @error('date_limit')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
</div>
<div class="grid grid-cols-3 gap-4">
<div class="mb-4">
    {!! Form::label('price', 'Precio') !!}
    {!! Form::number('price', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('price')? 'border-red-600': '')]) !!}

    @error('price')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('url_info', 'Link del informativo') !!}
    {!! Form::text('url_info', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('url_info')? 'border-red-600': '')]) !!}

    @error('url_info')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('link_inscription', 'Link de Inscripcion') !!}
    {!! Form::text('link_inscription', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('link_inscription')? 'border-red-600': '')]) !!}

    @error('link_inscription')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
</div>
<div class="grid grid-cols-3 gap-4">

    <div>
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-input block w-full mt-1'])
        !!}

    </div>
    <div>
        {!! Form::label('type_id', 'Subcategoria') !!}
        {!! Form::select('type_id', $types, null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
    <div>
        {!! Form::label('status_course', 'Estado') !!}
        {!! Form::select('status_course',['1'=>'Activo','2'=>'Proximamente','3'=>'Finalizado'], null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>

</div>
<h1 class="mt-8 mb-2 text-2xl font-bold">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
        <img id="picture" class="object-cover object-center w-full h-64"  src="{{ url('storage/'.$course->image->url) }}">
        @else
        <img id="picture" class="object-cover object-center w-full h-64" src="{{asset('images/homes/curso.png')}}">
        @endisset
    </figure>
    <div>
        <p class="mb-2">
           Cargar imagen las medidas son 350x350 en formato .png
        </p>
        {!! Form::file('file', ['class'=> 'form-input w-full'. ($errors->has('file')? 'border-red-600': ''),'id'=>'file','accept'=>'image/*']) !!}
        @error('file')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
    </div>
</div>
