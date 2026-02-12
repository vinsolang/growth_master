@extends('layout.app')
@section('title', 'Sitemap | Growth Master')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            {{-- <img src="https://www.vistage.com/wp-content/uploads/2018/12/Header-about-vistage-worldwide-offices.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-20"> --}}
            @if(!empty($getBanner) && $getBanner[12]->title === 'sitemap')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[12]->image) }}"
                       class="w-full h-full object-cover px-4 md:px-8 xl:px-20 -mt-8"
                        alt="Hero Image"
                    >
            @endif


            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-xl md:text-3xl lg:text-5xl font-semibold mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    Sitemap
                </h1>
            </div>
        </div>
        <div class="space-y-10">
            {{-- sitemap --}}
            <div class="min-h-screen bg-gray-50 py-10 px-4">

                <div class="max-w-5xl mx-auto bg-white overflow-hidden">

                    <div class="bg-[#68875d] text-white">
                        <a href="{{ route('home') }}" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Home
                            </div>
                        </a>

                        <a href="{{ route('membership') }}" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Why Join Growth Master
                            </div>
                        </a>
                    </div>

                    <div class="text-[#004a61]">

                        <a href="{{ route('approach') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Our Approach
                            </div>
                        </a>

                        <div class="border-b border-gray-200">
                            <a href="{{ route('program') }}" class="block bg-[#eaeff2]">
                                <div class="px-10 py-3.5 font-bold border-b border-gray-300">
                                    Our Programs
                                </div>
                            </a>

                            <div class="bg-white">
                                <a href="{{ route('chief.executive.coaching.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Chief Executive Coaching Program</div>
                                </a>
                                <a href="{{ route('small.business.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Small Business Program</div>
                                </a>
                                <a href="{{ route('trusted.advisor.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Trusted Advisor Program</div>
                                </a>
                                <a href="{{ route('key.executive.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Key Executive Program</div>
                                </a>
                                <a href="{{ route('advancing.leader.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Advancing Leader Program</div>
                                </a>
                                <a href="{{ route('emerging.leader.program') }}" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Emerging Leader Program</div>
                                </a>
                                <a href="{{ route('growth.master.inside.program') }}" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Growth Master Inside Program</div>
                                </a>
                            </div>
                        </div>

                        <div class="border-b border-gray-200">
                            <a href="{{ route('review') }}" class="block bg-[#eaeff2]">
                                <div class="px-10 py-3.5 font-bold border-b border-gray-300">
                                    Growth Master Reviews
                                </div>
                            </a>
                            <div class="bg-white">
                                <a href="{{ route('per.to.per') }}" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Peer-to-Peer Mentoring</div>
                                </a>
                                 <a href="{{ route('exclusive.peer.groups') }}" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Exclusive Peer Groups</div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-[#68875d] text-white">
                        <a href="{{ route('events') }}" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Events
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#68875d] text-white">
                        <a href="{{ route('about') }}" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                About Growth Master
                            </div>
                        </a>
                    </div>
                     <div class="text-[#004a61]">
                        <a href="{{ route('about') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                               What is Growth Master?
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('Laws.of.eadership') }}" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                7 Laws of Leadership
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('ceo.climp') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                The CEO Climp
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#68875d] text-white">
                        <a href="{{ route('chair.growth') }}" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Chair
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('chair.growth') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                               Lead a Group
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('ceo.coa.qual') }}" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Chair Qualifications
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('chair.application') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Apply to be a Growth Master Chair
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#68875d] text-white">
                        <div class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#30611f] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Apply for Growth Master
                            </div>
                        </div>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="{{ route('chair.application') }}" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Apply to be a Growth Master Chair
                            </div>
                        </a>
                    </div>
                     <div class="text-[#004a61]">
                        <a href="{{ route('ceo.coa.qual') }}" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Chair Qualifications
                            </div>
                        </a>
                    </div>
                </div>
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