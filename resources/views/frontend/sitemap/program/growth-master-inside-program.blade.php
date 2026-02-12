@extends('layout.app')
@section('title', 'Growth Master | Per-to-Per')
@section('content')
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full h-[40vh] md:h-screen top-24">

            <!-- Background Image (NO padding!) -->
            {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476341864_610433894942299_7957939987115653297_n-1024x682.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12"> --}}
                  @if(!empty($getBanner) && $getBanner[20]->title === 'Growth Master Inside Program')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[20]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif

            <!-- Dark overlay (matches image exactly) -->
            {{-- <div class="absolute inset-0 bg-black/50 w-[95%] h-full object-cover md:px-10 xl:px-20"></div> --}}

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-xl md:text-3xl lg:text-5xl font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                   @if(!empty($getBanner) && $getBanner[20]->title === 'Growth Master Inside Program')
                            {{ $getBanner[20]->name }}
                            @endif
                </h1>

                <p
                    class="text-[14px] md:text-[20px] lg:text-[25px] font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    @if(!empty($getBanner) && $getBanner[20]->title === 'Growth Master Inside Program')
                            {!! nl2br(e(value: $getBanner[20]->content)) !!}
                    @endif
                </p>

            </div>
        </div>
        <div class="space-y-10">
            <div class="space-y-6">
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master Inside is a unique executive development program designed for your senior leadership team. It combines dynamic group meetings, speaker workshops and individual mentorship. Through experiential learning, participants strengthen their leadership abilities, 
                    improve collaboration and put your company on course for greater success.
                </p>
            </div>

            
                  <section class="relative w-full min-h-screen">

                <!-- Background Image -->
                <img src="https://www.vistage.com/wp-content/uploads/2019/09/2020-Hero-Three-business-professionals-having-small-meeting-on-a-couch-1024x524.jpg"
                    class="absolute inset-0 w-full h-full object-cover" alt="">

                <!-- Dark Blue Overlay -->
                <div class="absolute inset-0 bg-[#68875d]/90"></div>

                <!-- Content -->
                <div class="relative max-w-6xl mx-auto px-8 py-20 text-white">

                    <!-- Title -->
                    <h2 class="text-xl font-semibold mb-12">
                       Set them up to thrive.
                    </h2>

                    <!-- Grid Layout -->
                    <div class="grid md:grid-cols-3">

                        <!-- LEFT SIDE (Challenges) -->
                        <div class="space-y-12">

                            <!-- Item -->
                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                   The growth of your business is outpacing the current capabilities of your team.    
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    You are doing it all, and your business is limited by your capacity.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                   Senior leaders struggle with big picture strategic thinking and overlook solutions that fall outside their specific areas of expertise.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Challenge:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Departmental silos result in avoidable conflicts and lack of a shared vision. 
                                </p>
                            </div>

                        </div>
                         <!-- CENTER ARROWS -->
                        <div class="hidden md:flex flex-col justify-between items-center py-2">
                            
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>
                            <div class="text-[#ffffff] text-8xl">→</div>

                        </div>
                        <!-- RIGHT SIDE (Solutions) -->
                        <div class="space-y-12">

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Consider the full range of innovative tools, disciplines and options at your disposal to support decisions that drive smart, sustainable growth over the long term. 
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    With the influence and support of an executive coach and peer group, each member gains confidence as a leader, helping empower teams to execute against strategic vision.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                   Exposure to diverse perspectives and thought leadership helps to open minds, widen viewpoints and enhance collaboration. This enables participants to step out of the box to identify broader solutions to departmental and business challenges.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Solution:</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Peer collaboration in a trusted setting breaks down barriers, builds stronger relationships and facilitates open communication.   
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </section>
           
            
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (sessionStorage.getItem("scrollPos")) {
                window.scrollTo(0, sessionStorage.getItem("scrollPos"));
                sessionStorage.removeItem("scrollPos");
            }

            document.querySelector("form")?.addEventListener("submit", () => {
                sessionStorage.setItem("scrollPos", window.scrollY);
            });
        });
    </script>
   <script>
document.addEventListener("DOMContentLoaded", function () {
    const sourceSelect = document.getElementById("sourceSelect");
    const referFields = document.getElementById("referFields");

    const referralSources = ['member', 'chair', 'speaker','google','media'];

    function toggleReferFields() {
        if (referralSources.includes(sourceSelect.value)) {
            referFields.classList.remove("hidden");
        } else {
            referFields.classList.add("hidden");
        }
    }

    // On change
    sourceSelect.addEventListener("change", toggleReferFields);

    // On page load (for validation errors)
    toggleReferFields();
});
</script>



@endsection