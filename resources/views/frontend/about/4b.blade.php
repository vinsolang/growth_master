@extends('layout.app')
@section('title', $getMenu[0]->menu_20)
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[50vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
              @if(!empty($getBanner) && $getBanner[22]->title === '4B')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[22]->image) }}"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    @if(!empty($getBanner) && $getBanner[22]->title === '4B')
                            {{ $getBanner[22]->name }}
                            @endif
                </h1>

                <p
                    class="text-[18px] md:text-[30px] lg:text-[40px] font-normal max-w-6xl leading-tight mb-3 md:px-10 xl:px-12 md:py-12">
                      @if(!empty($getBanner) && $getBanner[22]->title === '4B')
                            {!! nl2br(e(value: $getBanner[22]->content)) !!}
                            @endif
                </p>
            </div>
        </div>
        <div class="space-y-10">
            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                     {!! nl2br(e(value: $getItem->description)) !!}
                </p>  
            </div>
            {{-- Logo --}}
            <div class="text-blue-900 max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1> {!! nl2br(e(value: $getItem->title)) !!}</h1>
            </div>

            <div class="max-w-6xl mx-auto flex flex-col justify-center items-center gap-8">

                @foreach ($getItem->title_card as $index => $title)

                <div class="flex md:flex-row flex-col w-full bg-white border border-gray-200 rounded-lg overflow-hidden">

                    <!-- Image -->
                    <div class="w-full md:w-[320px] md:h-[220px] flex-shrink-0">
                        <img src="{{ asset($getItem->img_card[$index] ?? '') }}"
                            alt="Accounting Block"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="p-6 flex-1">

                        <h3 class="text-blue-900 font-bold text-xl mb-4">
                            {!! nl2br(e($title)) !!}
                        </h3>

                        <p class="text-blue-900 text-base leading-relaxed">
                            {!! nl2br(e($getItem->desc_card[$index] ?? '')) !!}
                        </p>

                    </div>

                </div>

                @endforeach

                </div>
            {{-- Form Contact information --}}
            <div>
                @include('frontend.include.form')
            </div>

            @component('components.footer')
            @endcomponent
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menu = document.getElementById("growthMenu");
            const wrapper = document.getElementById("growthMenuWrapper");
            const offsetTop = wrapper.offsetTop;

            window.addEventListener("scroll", () => {
                if (window.scrollY >= offsetTop - 64) {
                    menu.classList.add(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                } else {
                    menu.classList.remove(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                }
            });
        });
    </script>

@endsection