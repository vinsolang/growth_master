@section('title', 'Why Join GrowthMaster for business coaching')
<div class=" w-full h-screen relative  ">
    <!-- Hero Image -->
    {{-- <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/IMG_5776-1536x1024.jpg" class="w-full h-full object-cover" alt="Hero Image"> --}}
     @if(!empty($getBanner) && $getBanner[1]->title === 'membership')
        <img 
            src="{{ asset('assets/banner/' . $getBanner[1]->image) }}"
            class="w-full h-full object-cover"
            alt="Hero Image"
        >
    @endif

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-30 text-white bg-black/50">

        <h1 class="text-[20px] text-start md:text-[30px] lg:text-[40px] font-semibold max-w-[940px] leading-tight">
            @if(!empty($getBanner) && $getBanner[1]->title === 'membership')
            {{-- {{ $getBanner[1]->name }} --}}
            {!! nl2br(e(value: $getBanner[1]->name)) !!}
            @endif
        </h1>

        <p class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-regular max-w-[940px] leading-tight">
            @if(!empty($getBanner) && $getBanner[1]->title === 'membership')
            
                {!! nl2br(e(value: $getBanner[1]->content)) !!}
            @endif
        </p>
        <a href="{{ route('home') }}#member-form">
            <button class="mt-6 py-5 px-6 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-semibold w-max">
            GET IN TOUCH
        </button>
        </a>
    </div>
</div>

<div class="flex flex-col  justify-center  items-center mt-10  gap-10">
     <p class="text-start text-blue-900 mx-10 md:mx-[250px]  font-regular text-[17px] md:text-[20px]">
        {!! nl2br(e($getContent[0]->content)) !!}
    </p>
    {{-- <p class="text-start text-[#343434] mx-10 md:mx-[250px]  font-regular text-[17px] md:text-[20px]">Traditional
        business coaching focuses on personal development through one-on-one sessions with a certified
        coach. While valuable for building management skills, this approach falls short when you’re evaluating a
        major acquisition, considering international expansion or navigating partnership disputes. And while your
        internal team can offer operational insight, they’re too close to daily operations to see the blind spots
        that outside perspectives can reveal.</p>
    <p class="text-start text-[#343434] mx-10 md:mx-[250px] font-regular text-[17px] md:text-[20px]">
        GrowthMaster combines personal leadership development with strategic business support through guided peer
        advisory groups. You get perspectives from 10-15 business owners who’ve made similar decisions, plus expert
        facilitation and individual coaching on finance and KPI setting. This comprehensive approach transforms how
        you lead your business, strengthen your personal effectiveness, and create positive impact in your
        community.
    </p>
    <p class="text-start text-[#343434] mx-10  md:mx-[250px] font-regular text-[17px] md:text-[20px]">
        The key difference: traditional coaching develops you as a leader, while GrowthMaster develops you as a
        leader AND provide an integrated suite of tools that seamlessly connects financial health analytics with
        strategic insights across Sales, Operations, and Human Resource Management (HRM), ensuring targeted,
        profitable growth.
    </p> --}}
</div>

  <div class="relative h-[50vh] mt-10">
    <!-- Background Hero Image -->
    <img src="{{ asset('assets/membership_hero2.jpg') }}" class="w-full h-full object-cover" alt="Hero">

    <!-- Overlay Text -->
  <div class="absolute inset-0  flex flex-col justify-center items-center lg:items-end px-6 md:px-16 lg:px-24 text-white text-right">

    <h1 class="text-[20px] md:text-[35px] lg:text-[40px] font-semibold leading-tight max-w-[900px]">
        {{ $getContent[0]->title }}
    </h1>

    <p class="mt-5 text-[15px] ps-5 lg:ps-25 text-white  text-start font-bold md:text-[17px] lg:text-[20px]  leading-tight lg:mx-[70px] max-w-[600px]">
        {!! nl2br(e($getContent[0]->description)) !!}
    </p>

</div>


</div>
