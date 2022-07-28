@component('mail::message')
#Hola
{{$name}} consulta desde evirtualsj.com sobre la carrera {{$carrera}} su consulta es:

  {{$mensaje}}.

#Contacto {{$email}}


@endcomponent
