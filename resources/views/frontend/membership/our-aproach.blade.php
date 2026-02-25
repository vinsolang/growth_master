@extends('layout.app')
@section('title', 'Peer Advisory Groups')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2025/05/379185291_301310172521341_6205432678662828896_n-1600x800.jpg" class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[2]->title === 'our approach')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[2]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                           @if(!empty($getBanner) && $getBanner[2]->title === 'our approach')
                            {{ $getBanner[2]->name }}
                            @endif
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[2]->title === 'our approach')
                            {!! nl2br(e(value: $getBanner[2]->content)) !!}
                            @endif
                    </p>

                  

                    <a href="#approach-form">
                        <button
                        class="mt-6 py-5 px-7 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-semibold w-max">
                        JOIN A GROUP
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col justify-center  items-center mt-10  gap-10">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px] mt-10">{{ $getContent[0]->title }}</h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    {!! nl2br(e($getContent[0]->content)) !!}
                </p>
            </div>

            <div class="relative mt-10 space-y-8">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px] mt-14">{{ $getContent[0]->title_on_card }}</h1>
                <div class="flex flex-col md:flex-col lg:flex-row justify-center items-center gap-8">
                    {{-- Card 1 --}}
                    <div class="bg-[#2A2D79] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-91.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>{{ $getContent[0]->title_card_1 }}</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>
                                {!! nl2br(e($getContent[0]->desc_card_1)) !!}
                            </p>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-[#2A2D79] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-84.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>{{ $getContent[0]->title_card_2 }}</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>{!! nl2br(e($getContent[0]->desc_card_2)) !!}</p>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="bg-[#2A2D79] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-89.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>{{ $getContent[0]->title_card_3 }}</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>{!! nl2br(e($getContent[0]->desc_card_3)) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
                            text-[#D82129] bg-white rounded 
                            transition-all duration-300 ease-in-out
                            hover:bg-[#D82129] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col  justify-center items-center mt-10 gap-10">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px] mt-10">
                    {{ $getContent[0]->title_1 }}
                </h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                   {!! nl2br(e($getContent[0]->content_1)) !!}
                </p>
            </div>

            {{-- block Group Items --}}
            <div class="relative w-full space-y-12 py-8">

                @foreach ($showApproach as $index => $section)
                    <div
                        class="flex flex-col md:flex-row justify-center items-center gap-8
                            py-4 px-4 xl:py-16 xl:px-35
                            {{ $index % 2 === 0 ? 'bg-[#F4F1A1]' : 'bg-[#FFFFFF]' }} rounded-lg shadow-md">

                        {{-- IMAGE (LEFT for odd sections) --}}
                        @if ($index % 2 !== 0)
                            <div class="w-full md:w-1/2">
                                <img src="{{ asset('assets/how_it_work/'. $section->image )}}" alt=""
                                    class="w-full h-full object-cover rounded-lg shadow-lg">
                            </div>
                        @endif

                        {{-- TEXT --}}
                        <div class="w-full md:w-1/2 space-y-3">
                            <h1 class="text-[#2A2D79] text-[16px] md:text-[20px] font-semibold">
                                {{ $index + 1 }}. {{ $section->title }}
                            </h1>

                            <p class="text-[#2A2D79] text-[14px] md:text-[18px]">
                                {{ $section->description }}
                            </p>

                            {{-- <a href="#" class="flex gap-2 font-semibold text-[#D82129] hover:text-[#1A8B43]">
                                <span>{{ $section->button_text }}</span>
                                <span class="arrow_r">&rarr;</span>
                            </a> --}}
                        </div>

                        {{-- IMAGE (RIGHT for even sections) --}}
                        @if ($index % 2 === 0)
                            <div class="w-full md:w-1/2">
                                <img src="{{ asset('assets/how_it_work/'. $section->image )}}" alt=""
                                    class="w-full h-full object-cover rounded-lg shadow-lg">
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>
            {{-- Button become a member --}}
            <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
                        text-[#D82129] bg-white rounded 
                        transition-all duration-300 ease-in-out
                        hover:bg-[#D82129] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            <div class="relative w-full space-y-4">
                <h1 class="text-center text-[#2A2D79] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                   {{ $getContent[0]->title_2 }}
                </h1>
                <p
                    class="text-start text-[#2A2D79] font-regular text-[14px] md:text-[18px] px-6 xl:px-50 md:px-16">
                   {!! nl2br(e($getContent[0]->created_at)) !!}
                </p>
                
              @foreach ($showHelpSection as $index => $item)
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div
                        class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-{{ $index }}"
                        id="accordion-trigger-{{ $index }}"
                    >
                        <h1 class="text-[#2A2D79] text-[16px] md:text-[24px]">
                            {{ $item->question }}
                        </h1>

                        <div class="flex items-center justify-center w-8 h-8">
                            <span class="plus text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-{{ $index }}"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out mt-2"
                    >
                        <div class="py-4 text-[#2A2D79] text-[14px] md:text-[18px]">
                            {!! $item->answer !!}
                        </div>
                    </div>

                </div>
            @endforeach

            </div>

            {{-- Frequently asked questions --}}
            <div class="relative w-full">
                @include('frontend.include.faqs')
            </div>
        </section>
        {{-- From Contact --}}
        <section class="relative w-full">
            
            
                @include('frontend.include.form')
            
        </section>
        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>

    
<script>
    document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.accordion-trigger').forEach(trigger => {

    trigger.addEventListener('click', () => {
      const panel = document.getElementById(trigger.getAttribute('aria-controls'));
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';

      document.querySelectorAll('.accordion-trigger').forEach(btn => {
        btn.setAttribute('aria-expanded', 'false');
        const otherPanel = document.getElementById(btn.getAttribute('aria-controls'));
        otherPanel.style.maxHeight = null;
        otherPanel.classList.remove('opacity-100');
        otherPanel.classList.add('opacity-0');

        btn.querySelector('.plus').classList.remove('hidden');
        btn.querySelector('.minus').classList.add('hidden');
      });

      if (!isOpen) {
        trigger.setAttribute('aria-expanded', 'true');
        panel.style.maxHeight = panel.scrollHeight + "px";
        panel.classList.remove('opacity-0');
        panel.classList.add('opacity-100');

        trigger.querySelector('.plus').classList.add('hidden');
        trigger.querySelector('.minus').classList.remove('hidden');
      }
    });

  });
});

</script>

@endsection