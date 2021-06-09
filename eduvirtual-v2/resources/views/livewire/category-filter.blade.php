<div>

    <div>

        <div
            class="grid mx-auto mt-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-7xl sm:px-6 lg:px-8 gap-x-6 gap-y-8">
            @foreach($courses as $course)
            <x-course-card :course="$course" />
            @endforeach

        </div>

        <div class="flex justify-center px-4 mx-auto mt-8 mb-8 max-w-7xl sm:px-6 lg:px-8">

            {{$courses->links()}}
        </div>
    </div>
