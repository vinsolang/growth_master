@extends('layout.app')
@section('title', 'Peer Advisory Groups')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('https://cac-center.edu.kh/wp-content/uploads/2025/05/379185291_301310172521341_6205432678662828896_n-1600x800.jpg') }}" class="w-full h-full object-cover" alt="Hero Image">

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        Peer Advisory Groups
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        Executive coaching alone can’t deliver what peer advisory groups provide.
                    </p>

                    <p
                        class="text-[16px] text-start mt-5 md:text-[18px] lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        Our comprehensive platform for success features core elements that work together:
                        valuable perspectives from a trusted group of peers, professional guidance from an accomplished
                        business leader (advisor) and deep insights from subject matter experts.
                    </p>

                    <a href="#approach-form">
                        <button
                        class="mt-6 py-5 px-7 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A GROUP
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col justify-center  items-center mt-10  gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">A Proven, Comprehensive Path to
                    Success</h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    You’ve reached a level of success where traditional business advice feels generic, and the stakes of
                    your decisions demand more than intuition. Executive coaching alone can’t deliver the transformation
                    that world-class leaders need.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    GrowthMaster is the authority in guided peer advisory coaching – a proven system purpose-built for deep
                    leadership transformation. No one else offers a more comprehensive method for making better decisions,
                    getting better outcomes and becoming a better leader.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    For more than 65 years, top executives and owners of small and mid-sized businesses have relied on our
                    unique coaching model. It’s a proven approach that helped member companies operate for 21+ years on
                    average, while most businesses fail within 5 years.
                </p>
            </div>

            <div class="relative mt-10 space-y-8">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-14">Why Peer Advisory Groups Outperform
                    Solo Coaching</h1>
                <div class="flex flex-col md:flex-col lg:flex-row justify-center items-center gap-8">
                    {{-- Card 1 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-91.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>Real-world guidance for high-stakes decisions</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>Whether you’re navigating your first major acquisition, preparing for succession or scaling
                                through economic uncertainty, you need guidance from experienced leaders who’ve faced
                                comparable challenges on their own leadership development path.</p>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-84.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>Designed for your growth stage</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>GrowthMaster’s peer advisory groups are designed to support CEOs at different stages of
                                growth – from those managing their first $1M+ company to executives leading
                                multi-million-dollar enterprises – by providing a space where issues can be processed in a
                                group setting, giving you the benefit of collective insights from your peers.</p>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-89.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2>Highly selective membership at every stage</h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>We vet members so that only those truly committed to the leadership climb and helping others
                                succeed gain membership.</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                                text-[#68875d] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#68875d] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col  justify-center items-center mt-10 gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    Why Peer Advisory Groups Outperform Traditional Consulting
                </h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    Most business advice comes from people who’ve never carried your level of responsibility. Consultants
                    offer theoretical frameworks. Your internal team provides operational insight but lacks strategic
                    distance. Your GrowthMaster peers bring something different:
                    real-world experience making decisions that affect hundreds of employees and millions in revenue.
                </p>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    When you’re evaluating a $10M acquisition or considering international expansion,
                    you need input from leaders who’ve carried the weight of decisions like these.
                    This isn’t about generic best practices. It’s about learning from executives who’ve already solved the
                    problems you’re facing.
                </p>
            </div>

            {{-- block Group Items --}}
            <div class="relative w-full space-y-12 py-8">
               
                @foreach ($showApproach as $index => $section)
                    <div
                        class="flex flex-col md:flex-row justify-center items-center gap-8
                        py-4 px-4 xl:py-16 xl:px-35
                        {{ $index % 2 === 0 ? 'bg-[#f5f2f2]' : '' }}">

                        {{-- IMAGE (LEFT for odd sections) --}}
                        @if ($index % 2 !== 0)
                            <div class="w-full md:w-1/2">
                                <img src="{{ asset('assets/how_it_work/'. $section->image )}}" alt="">
                            </div>
                        @endif

                        {{-- TEXT --}}
                        <div class="w-full md:w-1/2 space-y-3">
                            <h1 class="text-[#000000] text-[16px] md:text-[20px]">
                                {{ $index + 1 }}. {{ $section->title }}
                            </h1>

                            <p class="text-[#343434] text-[14px] md:text-[18px]">
                                {{ $section->description }}
                            </p>

                            <a href="#" class="text-[#003f5e] flex gap-2 font-semibold">
                                <span class="hover:text-[#0c6c9b]">{{ $section->button_text }}</span>
                                <span class="arrow_r">&rarr;</span>
                            </a>
                        </div>

                        {{-- IMAGE (RIGHT for even sections) --}}
                        @if ($index % 2 === 0)
                            <div class="w-full md:w-1/2">
                                <img src="{{ asset('assets/how_it_work/'. $section->image )}}" alt="">
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>
            {{-- Button become a member --}}
            <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                                text-[#68875d] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#68875d] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            <div class="relative w-full space-y-4">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                    What Makes Peer Advisory Groups More Effective Than Other Leadership Development
                </h1>
                <p
                    class="text-start text-[#343434] font-regular text-[14px] md:text-[18px] px-6 xl:px-50 md:px-16">
                    Peer advisory groups address the root challenge of leadership issues: the isolation that comes with executive responsibility. 
                    As the final decision-maker, you need more than advice from internal advisors or business coaches who lack executive experience
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
                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
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
                        <div class="py-4 text-[#343434] text-[14px] md:text-[18px]">
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
            <div class="space-y-4" id="approach-form">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                    Become a Growth Master Member
                </h1>
                <p class="text-[#333333] text-lg md:text-xl text-left max-w-[60%] mx-auto">
                    With Growth Master you’re joining a powerful community of high-caliber executives who challenge each other, 
                    inspire each other and share their perspectives 
                    to help each other make better decisions, become better leaders and achieve better outcomes.
                </p>
                <p class="text-[#333333] text-lg md:text-xl text-center">
                    Take your success to a new level. Complete the form below to find out if you qualify.
                </p>
            </div>
            <div class="py-6">
                @include('frontend.include.form')
            </div>
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