<x-dev-layout>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>

<div>
    @livewire('dev.courses-goals',['course'=>$course], key('courses-goals',$course->id))
</div>
<div>
    @livewire('dev.courses-requirements',['course'=>$course], key('courses-requirements',$course->id))
</div>
</x-dev-layout>
