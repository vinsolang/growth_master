@extends('layout.app')
@section('title', 'Executive Coaching Services & Leadership Programs')
@section('content')
    @component('components.navbar')

    @endcomponent
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                <img src="{{ asset('https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-hero-2048x849.webp') }}" class="w-full h-full object-cover" alt="Hero Image">
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        Executive Coaching Services & Leadership Programs
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                        Whether you’re a CEO seeking strategic peer advisory or looking to strengthen your leadership team, Vistage offers programs designed for varying levels of responsibility and organizational complexity.
                    </p>

                    <p
                        class="text-[16px] md:w-2xl text-start mt-5 md:text-[18px] font-regular max-w-[940px] leading-tight">
                        All programs offer the same foundational benefits of the Vistage platform and professionally facilitated peer groups, but the context and scale of the challenges discussed are aligned with your business revenue and role.
                    </p>
                    <p
                        class="text-[16px] md:w-2xl text-start mt-5 md:text-[18px] font-regular max-w-[940px] leading-tight">
                        Find the right program fit for you and your team.
                    </p>

                    <a href="{{ route('application') }}">
                        <button
                        class="mt-6 py-5 px-7 bg-[#EDC11C] text-[#333333] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A PROGRAM
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-[#333333] text-4xl font-2xl text-center space-y-8">
            <h1>Programs for CEOs, Presidents, Founders, & Owners</h1>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">Designed for CEOs, Presidents, Founders, Owners, or first-time CEOs, these Vistage programs provide unparalleled peer advisory and executive coaching for leaders navigating the complexities of business.</p>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">They are ideal for those with a formal management team and established departments, processes, and systems in place. Our members are driven by a desire to learn, identify and resolve blind spots, and significantly enhance their leadership ability.</p>
            <h1>How Vistage Helped Karen Norheim Define Her CEO Journey</h1>
            {{-- Video --}}
            <div class="flex justify-center items-center">
                <video src="{{ asset('assets/vedo.mp4') }}"></video>
            </div>
            {{-- Button Join out Programs --}}
            <div class="flex justify-center items-center mt-10">
               <a href="{{ route('application') }}">
                 <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#003F5F]
                            text-[#003F5F] bg-white rounded 
                            transition-all duration-300 ease-in-out
                            hover:bg-[#003F5F] hover:text-white font-semibold">
                    JOIN A PROGRAM

                    <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </button>
               </a>
            </div>
        </div>
        {{-- Block post about Our Program --}}
        <div class="relative w-full">
            {{-- blcok 1 --}}
            <div
                class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8 bg-[#f5f2f2]">
                {{-- image --}}
                <div class="md:hidden w-full md:w-1/2 flex justify-items-start">
                    <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-ce.webp" alt="">
                </div>
                {{-- text --}}
                <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                    <h3 class="text-[#333333] text-[16px] md:text-[20px]">FOUNDERS & OWNERS</h3>
                    <h1 class="text-[#333333] text-[30px] md:text-[30px] lg:text-[35px]">Chief Executive Program</h1>
                    <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                        The Vistage Chief Executive Program is specifically designed for leaders of companies 
                        with annual revenues of $5 million and above, 
                        focusing on the complex strategic challenges faced by established enterprises.
                    </p>
                    <a href="" class="text-[#003f5e] flex gap-2 font-semibold text-[16px] md:text-[18px]">
                        <button class="cursor-pointer hover:text-[#0c6c9b]">Learn more about Vistage Chairs</button>
                        <p class="arrow_r text-xl">&rarr;</p>
                    </a>
                </div>
                {{-- image --}}
                <div class="hidden w-full md:w-1/2 md:flex justify-items-start">
                    <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-ce.webp" alt="">
                </div>
            </div>
            {{-- blcok 2 --}}
            <div class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">
                {{-- image --}}
                <div class="w-full md:w-1/2 flex justify-items-start">
                    <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-sb.webp" alt="">
                </div>
                {{-- text --}}
                <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                    <h3 class="text-[#333333] text-[16px] md:text-[20px]">FOUNDERS & OWNERS</h3>
                    <h1 class="text-[#333333] text-[30px] md:text-[30px] lg:text-[35px]">Chief Executive Program</h1>
                    <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                        The Vistage Chief Executive Program is specifically designed for leaders of companies 
                        with annual revenues of $5 million and above, 
                        focusing on the complex strategic challenges faced by established enterprises.
                    </p>
                    <a href="" class="text-[#003f5e] flex gap-2 font-semibold text-[16px] md:text-[18px]">
                        <button class="cursor-pointer hover:text-[#0c6c9b]">Learn more about Vistage Chairs</button>
                        <p class="arrow_r text-xl">&rarr;</p>
                    </a>
                </div>
            </div>
            {{-- blcok 3 --}}
            <div
                class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8 bg-[#f5f2f2]">
                {{-- image --}}
                <div class="md:hidden w-full md:w-1/2 flex justify-items-start">
                    <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-ce.webp" alt="">
                </div>
                {{-- text --}}
                <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                    <h3 class="text-[#333333] text-[16px] md:text-[20px]">FOUNDERS & OWNERS</h3>
                    <h1 class="text-[#333333] text-[30px] md:text-[30px] lg:text-[35px]">Chief Executive Program</h1>
                    <p class="text-start text-[#343434] font-regular text-[14px] md:text-[18px]">
                        The Vistage Chief Executive Program is specifically designed for leaders of companies 
                        with annual revenues of $5 million and above, 
                        focusing on the complex strategic challenges faced by established enterprises.
                    </p>
                    <a href="" class="text-[#003f5e] flex gap-2 font-semibold text-[16px] md:text-[18px]">
                        <button class="cursor-pointer hover:text-[#0c6c9b]">Learn more about Vistage Chairs</button>
                        <p class="arrow_r text-xl">&rarr;</p>
                    </a>
                </div>
                {{-- image --}}
                <div class="hidden w-full md:w-1/2 md:flex justify-items-start">
                    <img src="https://www.vistage.com/wp-content/uploads/2025/09/2025-programs-ce.webp" alt="">
                </div>
            </div>
        </div>
        <div>
            @component('components.footer')

            @endcomponent
        </div>
    </div>
@endsection




