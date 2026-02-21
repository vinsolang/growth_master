<div class="w-full mx-auto flex flex-col md:flex-row justify-center items-start space-x-6 space-y-12 px-4">
    {{-- Vision --}}
    <div class="space-y-2 relative top-4">
        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('assets/icon/vission.png') }}" alt="" class="w-24 h-24">
            <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">{{ $getContent[0]->title_v }}</h1>
        </div>
        <p class="max-w-xl text-xl text-[#333333]">
             {!! nl2br(e(value: $getContent[0]->desc_v)) !!}
        </p>
    </div>
    {{-- Mission --}}
    <div class="space-y-2">
        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('assets/icon/image.png') }}" alt="" class="w-24 h-24">
            <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">{{ $getContent[0]->title_m }}</h1>
        </div>
        <p class="max-w-xl text-xl text-[#333333]">
          {!! nl2br(e(value: $getContent[0]->desc_m)) !!}
        </p>
    </div>
</div>
{{-- Core Value --}}
<div class="px-8">
    <div class="flex flex-col justify-center items-center">
        <img src="{{ asset('assets/icon/value.png') }}" alt="" class="w-24 h-24">
        <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">{{ $getContent[0]->title_c }}
    </div>
    <!-- Grid -->
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-start">

        <!-- S -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $getContent[0]->sub_t_1 }}</h2>
            <p class="text-xl text-[#333333]">
                {!! nl2br(e(value: $getContent[0]->text_1)) !!}
            </p>
        </div>

        <!-- H -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $getContent[0]->sub_t_2 }}</h2>
            <p class="text-xl text-[#333333]">
                  {!! nl2br(e(value: $getContent[0]->text_2)) !!}
            </p>
        </div>

        <!-- A -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $getContent[0]->sub_t_3 }}</h2>
            <p class="text-xl text-[#333333]">
                {!! nl2br(e(value: $getContent[0]->text_3)) !!}
            </p>
        </div>

        <!-- R -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $getContent[0]->sub_t_4 }}</h2>
            <p class="text-xl text-[#333333]">
                 {!! nl2br(e(value: $getContent[0]->text_4)) !!}
            </p>
        </div>

        <!-- E -->
        <div class="bg-white rounded-2xl p-6  md:col-span-2 lg:col-span-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">{{ $getContent[0]->sub_t_5 }}</h2>
            <p class="text-xl text-[#333333]">
                  {!! nl2br(e(value: $getContent[0]->text_5)) !!}
            </p>
        </div>

    </div>
</div>