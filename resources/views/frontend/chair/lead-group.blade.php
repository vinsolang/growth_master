@extends('layout.app')
@section('title', $getMenu[0]->menu_17)
@section('content')
    @component('components.navbar')
    @endcomponent
    <div class=" w-full h-[100vh] relative  ">
        <!-- Video Banner -->
        {{-- <video src="https://www.vistage.com/wp-content/uploads/2025/05/bg-chair-info.mp4" autoplay loop muted
            class="w-full h-full object-cover">
        </video> --}}
       
          @if(!empty($getBanner) && $getBanner[10]->title === 'lead group')
                    <img 
                        src="{{ asset('assets/banner/' . $getBanner[10]->image) }}"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                @endif

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white bg-black/50">

            <h1 class="text-[22px] text-left md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
               @if(!empty($getBanner) && $getBanner[10]->title === 'lead group')
                            {{ $getBanner[10]->name }}
                            @endif
            </h1>
            <p class="leading-relaxed text-xl max-w-3xl text-[#ffffff] text-left">
                 @if(!empty($getBanner) && $getBanner[10]->title === 'lead group')
                            {!! nl2br(e(value: $getBanner[10]->content)) !!}
                            @endif
            </p>

            <a href="#chair-form">
                <button
                    class="mt-6 py-5 px-8 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-semibold leading-relaxed tracking-widest uppercase">
                    lead a group
                </button>
            </a>
        </div>
    </div>
    {{-- Block Image for poster --}}
    <div class="">
        @php
            $cards = [
                [
                    'image' => asset($getCantent[0]->img_b_1),
                    'text'  => $getCantent[0]->desc_b_1,
                    'title' => $getCantent[0]->title_b_1,
                ],
                [
                    'image' => asset($getCantent[0]->img_b_2),
                    'text'  => $getCantent[0]->desc_b_2,
                    'title' => $getCantent[0]->title_b_2,
                ],
            ];
        @endphp
        <div class="flex justify-center items-center min-h-screen">
            <div class="flex flex-col space-y-7 w-full max-w-8xl">
                @foreach($cards as $index => $card)

                    <div
                        class="flex flex-col lg:flex-row justify-center items-center lg:space-y-0 space-y-8 w-full px-4 lg:px-24">

                        {{-- TEXT --}}
                        <div class="flex flex-col justify-center items-start lg:w-1/2 w-full lg:h-[400px] order-2 space-y-10 md:py-0 py-4
                                                    {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                            <h1 class="text-blue-900 lg:text-5xl text-2xl font-semibold text-left px-4 md:px-12">
                                {{ $card['title'] }}
                            </h1>
                            <p class="text-left text-blue-900 md:text-xl text-[18px] px-4 md:px-12">
                              
                                 {!! nl2br(e($card['text'])) !!}
                            </p>
                        </div>

                        {{-- IMAGE --}}
                        <div class="lg:w-1/2 w-full lg:h-[90%] order-1 lg:py-4
                                                    {{ $index % 2 == 0 ? 'lg:order-2' : 'lg:order-1' }}">
                            <img src="{{ $card['image'] }}" class="w-full h-full object-cover">
                        </div>

                    </div>

                @endforeach
            </div>
        </div>

    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-blue-900 lg:text-4xl text-2xl font-semibold">
            {{ $getCantent[0]->title_1 }}
        </h1>
        <p class="leading-relaxed text-xl text-blue-900 text-left mx-auto max-w-4xl">
           {!! nl2br(e($getCantent[0]->desc_1)) !!}
        </p>

        {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-center">
                    {{ $getCantent[0]->title_cd_1 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                      {!! nl2br(e($getCantent[0]->d_cd_1)) !!}
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                   {{ $getCantent[0]->title_cd_2 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_cd_2)) !!}
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                    {{ $getCantent[0]->title_cd_3 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                      {!! nl2br(e($getCantent[0]->d_cd_3)) !!}
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                     {{ $getCantent[0]->title_cd_4 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_cd_4)) !!}
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                    {{ $getCantent[0]->title_cd_5 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_cd_5)) !!}
                </p>
            </div>
            {{-- Card 6 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                    {{ $getCantent[0]->title_cd_6 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_cd_6)) !!}
                </p>
            </div>

            {{-- Card 7 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full hidden">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                     {{ $getCantent[0]->title_cd_7 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_cd_7)) !!}
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-blue-900 lg:text-4xl text-2xl font-semibold">
             {{ $getCantent[0]->title_2 }}
        </h1>
        <p class="leading-relaxed text-xl text-blue-900 text-left mx-auto max-w-4xl">
               {!! nl2br(e($getCantent[0]->desc_2)) !!}
        </p>

        <div class="max-8xl mx-auto bg-amber-200 text-left">

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> {{ $getCantent[0]->t_t_1 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                           {!! nl2br(e($getCantent[0]->t_d_1)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> {{ $getCantent[0]->t_t_2 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        {!! nl2br(e($getCantent[0]->t_d_2)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> {{ $getCantent[0]->t_t_3 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        {!! nl2br(e($getCantent[0]->t_d_3)) !!}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> {{ $getCantent[0]->t_t_4 }}</h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        {!! nl2br(e($getCantent[0]->t_d_4)) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-blue-900 lg:text-4xl text-2xl font-semibold">
             {{ $getCantent[0]->title_3 }}
        </h1>
        <p class="leading-relaxed text-xl text-blue-900 text-left mx-auto max-w-4xl px-6">
           {!! nl2br(e($getCantent[0]->desc_3)) !!}
        </p>

        {{-- Card Element --}}
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 md:grid-cols-2 h-auto px-4 gap-x-8">
            {{-- Card 1 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                     {{ $getCantent[0]->t_c_1 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                 {!! nl2br(e($getCantent[0]->d_c_1)) !!}
                </p>
            </div>

            {{-- Card 2 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                      {{ $getCantent[0]->t_c_2 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                    {!! nl2br(e($getCantent[0]->d_c_2)) !!}
                </p>
            </div>
            {{-- card 3 --}}
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                       {{ $getCantent[0]->t_c_3 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_c_3)) !!}
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                      {{ $getCantent[0]->t_c_4 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_c_4)) !!}
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-2xl font-bold mb-4 text-left">
                       {{ $getCantent[0]->t_c_5 }}
                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                       {!! nl2br(e($getCantent[0]->d_c_5)) !!}
                </p>
            </div>
        </div>
    </div>

    <section class="bg-[#2A2D79] text-white py-20 px-6">
        <div class="max-w-7xl mx-auto">

            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-semibold mb-6">
                       {{ $getCantent[0]->title_4 }}
                </h1>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                       {!! nl2br(e($getCantent[0]->desc_4)) !!}
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- ITEM 1 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 7a3 3 0 11-6 0 3 3 0 016 0zM12 14v7m-6 0h12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                              {{ $getCantent[0]->t_bg_1 }}
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                              {!! nl2br(e($getCantent[0]->d_bg_1)) !!}
                        </p>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m-6-8h6M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H9l-4 4v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             {{ $getCantent[0]->t_bg_2 }}
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            {!! nl2br(e($getCantent[0]->d_bg_2)) !!}
                        </p>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM6 22v-2a6 6 0 0112 0v2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             {{ $getCantent[0]->t_bg_3 }}
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                             {!! nl2br(e($getCantent[0]->d_bg_3)) !!}
                        </p>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 12a4 4 0 100-8 4 4 0 000 8zM2 20h20M4 20a8 8 0 0116 0" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             {{ $getCantent[0]->t_bg_4 }}
                        </h3>
                        <p class="text-white/90 leading-relaxed">
                             {!! nl2br(e($getCantent[0]->d_bg_4)) !!}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Chair Contact Form --}}
    <section>
        <h1 class="text-blue-900 text-2xl md:text-4xl text-center font-semibold py-6">
            {{ $getTextofForm[0]->title }}
        </h1>
        <p class="text-md md:text-lg text-blue-900 max-w-4xl mx-auto">
            {!! nl2br($getTextofForm[0]->description) !!}
        </p>
        <div class="max-w-4xl mx-auto py-6 text-blue-900">
             {!!($getTextofForm[0]->desc_list) !!}
        </div>

        <div id="">
            <form action="{{ route('chair.contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="max-w-7xl mx-auto p-6 text-blue-900" id="chair-form">
                    <!-- ================= Chair Contact Form ================= -->
                    <h2 class="text-xl font-semibold mb-2">Contact Form</h2>
                    <hr class="mb-6 w-1/2 border-gray-300">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                        <!-- First Name -->
                        <div>
                            <input name="firstname" type="text" value="{{ old('firstname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="First name*">
                            @error('firstname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div>
                            <input type="text" name="lastname" value="{{ old('lastname') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Last name*">
                            @error('lastname')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Email -->
                        <div>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Email Address">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mobile Phone -->
                        <div>
                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Phone*">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <select name="member_status" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">Former/Current Growth Master Member*</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <select name="executive_experience" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">C-level executive experience*</option>
                            <option value="0-10">0-10</option>
                            <option value="16-20">16-20</option>
                            <option value="20+">20+</option>
                        </select>
                        <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Most employees managed*</option>

                            <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                            <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                            <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                            <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                            <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                            <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                            <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                        </select>
                    </div>
                    <hr class="bg-[#333333] w-full mt-8">
                    <div class="py-6 md:w-[50%]">
                        <label for="">Pleaser provide a link to your LinkedIn Profile.</label>
                        <input type="text" name="link" value="{{ old('link') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="https://linkedin.com">
                        @error('link')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">OR</p>
                    <div class="py-6 md:w-[50%]">
                        <label for="">Upload your resume or executive bio:</label>
                        <input type="file" name="cv" value="{{ old('cv') }}"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                        @error('cv')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <label for="">Max. file size: 20 MB.</label>
                    </div>
                    <div class="py-6 md:w-[50%]">
                        <textarea name="comment" id="" placeholder="comments" class="w-full bg-[#e9eff2] rounded-md px-4 focus:outline-none" rows="6"></textarea>
                        @error('comment')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-[#333333] text-lg">*Indicates Response Required</p>
                </div>

                <div class="flex justify-center text-xl mt-10">
                    <button type="submit"
                        class="inline-flex items-center justify-center w-72 h-14 bg-red-600 text-white hover:bg-blue-900 font-semibold uppercase cursor-pointer">
                        Become a member
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Title --}}
    <div class="text-blue-900 max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-4xl px-4 py-8">
        <h1> {{ $getCantent[0]->title_5 }}</h1>
    </div>
    <div class="text-blue-900 max-w-7xl mx-auto text-center text-2xl md:text-3xl xl:text-3xl px-4">
        <h1> {!! nl2br(e($getCantent[0]->desc_5)) !!}</h1>
    </div>

    {{-- @@@ --}}
    <section class="max-w-[90%] mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- LEFT CARD -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-10 text-center">
                <!-- Avatar -->
                <div class="flex justify-center mb-6">
                    <img
                        src="{{ asset($getCantent[0]->profile_him) }}"
                        alt="Ola Sage"
                        class="w-64 h-64 rounded-full object-cover"
                    />
                </div>

                <!-- Name -->
                <h2 class="text-2xl font-semibold text-blue-900 mb-2">
                  {{ $getCantent[0]->name }}
                </h2>

                <!-- Meta -->
                <p class="text-blue-900 font-medium">
                     {!! nl2br(e($getCantent[0]->position)) !!}
                </p>
                

                <!-- Quote -->
                <p class="text-blue-900 text-lg leading-relaxed italic">
                    {!! nl2br(e($getCantent[0]->desc_him)) !!}
                </p>
            </div>

            <!-- RIGHT VIDEO -->
            <div class="lg:col-span-2">
                <div class="relative rounded-lg overflow-hidden shadow-lg bg-black">
                    <video
                        controls
                        class="w-full h-[480px] object-cover"
                        poster="https://cac-center.edu.kh/wp-content/uploads/2017/12/476130730_610434091608946_2648315335922836771_n-1280x800.jpg"
                    >
                        <source src="{{ asset($getCantent[0]->vdo) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <!-- Caption -->
                <p class="mt-4 text-blue-900 text-2xl font-semibold">
                     {{ $getCantent[0]->title_v }}
                </p>
                <p class="mt-4 text-blue-900 text-xl font-normal">
                     {!! nl2br(e($getCantent[0]->desc_v)) !!}
                </p>
            </div>

        </div>
    </section>


   <div class="py-16">
     @component('components.footer')

    @endcomponent
   </div>
<script>
    document.querySelector('input[name="cv"]').addEventListener('change', e => {
    const file = e.target.files[0];
    if (file && file.size > 20 * 1024 * 1024) {
        alert('File must be under 20MB');
        e.target.value = '';
    }
});

</script>
@endsection



{{-- <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Select Country*</option>

                            <option value="1-5" {{ old('staff') == '1-5' ? 'selected' : '' }}>1 - 5</option>
                            <option value="6-10" {{ old('staff') == '6-10' ? 'selected' : '' }}>6 - 10</option>
                            <option value="11-20" {{ old('staff') == '11-20' ? 'selected' : '' }}>11 - 20</option>
                            <option value="21-40" {{ old('staff') == '21-40' ? 'selected' : '' }}>21 - 40</option>
                            <option value="41-70" {{ old('staff') == '41-70' ? 'selected' : '' }}>41 - 70</option>
                            <option value="71-100" {{ old('staff') == '71-100' ? 'selected' : '' }}>71 - 100</option>
                            <option value="100 Above" {{ old('staff') == '100 Above' ? 'selected' : '' }}>100 Above</option>
                        </select> --}}