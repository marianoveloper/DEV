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
<div class="mb-4">
    {!! Form::label('duration', 'Duración') !!}
    {!! Form::text('duration', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('duration')? 'border-red-600': '')]) !!}

    @error('duration')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('date_start', 'Fecha de Inicio') !!}
{!! Form::date('date_start',\Carbon\Carbon::now(), ['class'=>'form-input block w-full mt-1'. ($errors->has('date_start')? 'border-red-600': '')]) !!}

    @error('date_start')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
<div class="mb-4">
    {!! Form::label('date_limit', 'Fecha Limite') !!}
{!! Form::date('date_limit', \Carbon\Carbon::now(), ['class'=>'form-input block w-full mt-1'. ($errors->has('date_limit')? 'border-red-600': '')]) !!}

    @error('date_limit')
    <strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
</div>
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
<div class="grid gap-4 drid-cols-3">
    <div>
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-input block w-full mt-1'])
        !!}

    </div>
    <div>
        {!! Form::label('subcategory_id', 'Subcategoria') !!}
        {!! Form::select('subcategory_id', $subcategory, null, ['class'=>'form-input block w-full mt-1']) !!}
    </div>
</div>
<h1 class="mt-8 mb-2 text-2xl font-bold">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
        <img id="picture" class="object-cover object-center w-full h-64" src="{{Storage::url($course->image->url)}}">
        @else
        <img id="picture" class="object-cover object-center w-full h-64" src="{{asset('images/homes/curso.png')}}">
        @endisset
    </figure>
    <div>
        <p class="mb-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi voluptas
            repudiandae, pariatur deleniti iusto officiis sed recusandae quia. Explicabo ab
            consequatur inventore maxime nesciunt, aliquam ut nam accusamus et cumque?
        </p>
        {!! Form::file('file', ['class'=> 'form-input w-full'. ($errors->has('file')? 'border-red-600': ''),'id'=>'file','accept'=>'image/*']) !!}
        @error('file')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
    </div>
</div>
