@extends('layout.app')
@section('title', 'About Growth Master')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
              @if(!empty($getBanner) && $getBanner[9]->title === 'climb')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[9]->image) }}"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    @if(!empty($getBanner) && $getBanner[9]->title === 'climb')
                            {{ $getBanner[9]->name }}
                            @endif
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                      @if(!empty($getBanner) && $getBanner[9]->title === 'climb')
                            {!! nl2br(e(value: $getBanner[9]->content)) !!}
                            @endif
                </p>
            </div>
        </div>
        <div class="space-y-10">
            {{-- Growth Master Events Types --}}
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                     {!! nl2br(e(value: $getItem[0]->description)) !!}
                </p>
            </div>
            {{-- Logo --}}
            <div class="text-blue-900 max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1> {!! nl2br(e(value: $getItem[0]->title)) !!}</h1>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <!-- Card 1 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="{{ asset($getItem[0]->img_card_1) }}" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-blue-900 font-bold text-xl leading-snug mb-4">
                               {!! nl2br(e(value: $getItem[0]->title_card_1)) !!}
                        </h3>

                        <p class="text-blue-900 text-base leading-relaxed">
                               {!! nl2br(e(value: $getItem[0]->desc_card_1)) !!}
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="{{ asset( $getItem[0]->img_card_2) }}" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-blue-900 font-bold text-xl leading-snug mb-4">
                        {!! nl2br(e(value: $getItem[0]->title_card_2)) !!}
                        </h3>

                        <p class="text-blue-900 text-base leading-relaxed">
                         {!! nl2br(e(value: $getItem[0]->desc_card_2)) !!}
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="{{ asset($getItem[0]->img_card_3) }}" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-blue-900 font-bold text-xl leading-snug mb-4">
                           {!! nl2br(e(value: $getItem[0]->title_card_3)) !!}
                        </h3>

                        <p class="text-blue-900 text-base leading-relaxed">
                          {!! nl2br(e(value: $getItem[0]->desc_card_3)) !!}
                        </p>
                    </div>
                </div>

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