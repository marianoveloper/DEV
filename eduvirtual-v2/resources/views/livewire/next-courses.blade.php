<div>
    @if(count($courses))
<div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 0,

            breakpoints: {
              640: {
                slidesPerView: 1,
                spaceBetween: 0,
              },
              768: {
                slidesPerView: 2,
                spaceBetween: 0,
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 0,
              },
            },
          })" class="relative w-10/12 mx-auto">
    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
        <button @click="swiper.slidePrev()"
            class="flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow lg:-ml-4 focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-left">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper">
            <!-- Slides -->

            @foreach($courses as $course)
            <div class="p-4 swiper-slide">
                <div class="flex flex-col overflow-hidden rounded shadow">
                    <div class="flex-shrink ">

                        <img class="object-cover w-full h-56" src="{{ url('storage/'.$course->image->url) }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
        <button @click="swiper.slideNext()"
            class="flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow lg:-mr-4 focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-right">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>
@else
<div class="flex items-center justify-center h-48 mb-4 bg-white border border-gray-100 rounded-lg shadow-xl">
    <div class="w-10 h-10 duration-300 border-2 border-indigo-500 rounded animate-spin ease"></div>
</div>
@endif
</div>
