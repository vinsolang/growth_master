@extends('layout.app')
@section('title', 'Become a Speaker')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                {{-- <img
                    src="https://cac-center.edu.kh/wp-content/uploads/2025/05/379185291_301310172521341_6205432678662828896_n-1600x800.jpg"
                    class="w-full h-full object-cover" alt="Hero Image"> --}}
                @if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker')
                    <img src="{{ asset('assets/banner/' . $getBanner[23]->image) }}" class="w-full h-full object-cover"
                        alt="Hero Image">
                @endif

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker')
                            {{ $getBanner[23]->name }}
                        @endif
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        @if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker')
                            {!! nl2br(e(value: $getBanner[23]->content)) !!}
                        @endif
                    </p>

                </div>
            </div>

            <div class="flex flex-col justify-center items-center mt-10 gap-2 py-4">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px]">
                    {{ $getText->title_1 }}
                </h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    {!! nl2br($getText->desc_1) !!}
                </p>
            </div>
            <div class="bg-[#2A2D79] w-full h-auto p-12 text-white">
                <h1 class="text-center text-[20px] md:text-[35px] mt-10 pb-6">{{ $getText->title_2 }}</h1>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-lg">
                   @foreach(json_decode($getText->text_json ?? '[]', true) as $text)

                        <div class="flex justify-start items-center">
                            <p>{{ $text }}</p>
                        </div>

                    @endforeach
                   
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-6">

                <!-- Title -->
                <h2 class="text-center text-3xl md:text-4xl text-blue-900 font-semibold m-12">
                      {{ $getText->title_3 }}
                </h2>

                <!-- Cards -->
                <div class="grid md:grid-cols-2 gap-10">
                      @foreach($getText->card_json ?? [] as $cards)
                    <!-- Card 1 -->
                    <div class="bg-[#2A2D79] text-white text-center px-10 py-16 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl md:text-3xl mb-6 font-medium">
                                {{ $cards['title'] }}
                            </h3>

                            <p class="text-lg leading-relaxed max-w-md mx-auto">
                               {!! nl2br($cards['desc']) !!}
                            </p>
                        </div>

                        <div class="mt-14">
                            <a href="{{ route('chair.application') }}"
                                class="bg-[#e8000c] text-white font-semibold tracking-widest px-10 py-4">
                                GET STARTED
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

            
            <div class="flex flex-col justify-center  items-center mt-10 gap-2">
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    {!! $getText->desc_3 !!}
                </p>
            </div>

            <div class="flex justify-center items-center py-8">
                <a href="{{ route('membership') }}" class="flex justify-center items-center text-[#e8000c] text-lg border border-[#e8000c] w-52 h-12">
                    Explore Membership
                </a>
            </div>

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