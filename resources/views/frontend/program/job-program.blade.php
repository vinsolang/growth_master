@extends('layout.app')
@section('title', 'Programs Guaranteed')
@section('content')
    @component('components.navbar')

    @endcomponent
    <style>
        /* ===== CKEditor Professional Styling ===== */
.program-content {
    color: #2A2D79;
    font-size: 18px;
    line-height: 1.8;
}

/* Headings */
.program-content h1,
.program-content h2,
.program-content h3,
.program-content h4 {
    color: #2A2D79;
    font-weight: 700;
    margin-top: 30px;
    margin-bottom: 15px;
}

.program-content h1 { font-size: 32px; }
.program-content h2 { font-size: 26px; }
.program-content h3 { font-size: 22px; }

/* Paragraph */
.program-content p {
    margin-bottom: 18px;
}

/* Lists */
.program-content ul,
.program-content ol {
    padding-left: 25px;
    margin-bottom: 20px;
}

.program-content ul li {
    list-style-type: disc;
    margin-bottom: 8px;
}

.program-content ol li {
    list-style-type: decimal;
    margin-bottom: 8px;
}

/* Links */
.program-content a {
    color: #2A2D79;
    font-weight: 600;
    text-decoration: underline;
}

.program-content a:hover {
    color: #1A8B43;
}

/* Blockquote */
.program-content blockquote {
    border-left: 4px solid #2A2D79;
    padding-left: 15px;
    margin: 20px 0;
    font-style: italic;
    background: #F4F1A1;
    padding: 15px;
    border-radius: 8px;
}

/* Images */
.program-content img {
    width: 100%;
    border-radius: 12px;
    margin: 20px 0;
}

/* Tables */
.program-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.program-content table th,
.program-content table td {
    border: 1px solid #DBDBDB;
    padding: 10px;
}

.program-content table th {
    background: #2A2D79;
    color: white;
}
    </style>
  <div class="space-y-10">
    <!-- Hero Section -->
    <section class="relative w-full">
        <div class="w-full h-[110vh] md:h-screen relative">
            @if(!empty($getBanner) && $getBanner[21]->title === 'Job Guaranteed Programs')
                <img src="{{ asset('assets/banner/' . $getBanner[21]->image) }}" class="w-full h-full object-cover" alt="Hero Image">
            @endif
            <div class="absolute inset-0 bg-black/40 w-full h-full"></div>

            <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 text-white bg-black/50">
                <h1 class="text-3xl md:text-4xl font-semibold max-w-[940px] leading-tight">
                    {{ $getBanner[21]->name ?? '' }}
                </h1>
                <p class="text-lg md:text-xl mt-5 max-w-[940px] leading-tight">
                    {!! nl2br(e($getBanner[21]->content ?? '')) !!}
                </p>
            </div>
        </div>
    </section>

    <!-- Program Intro -->
    <div class="md:px-0 px-4">
        <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl font-bold">
            {{ $getTextProgram[0]->title_page }}
        </h1>
        <div class="program-content max-w-7xl mx-auto text-blue-900 text-xl md:text-2xl text-left py-6 space-y-4">
            {!! $getTextProgram[0]->desc_page !!}
        </div>
    </div>

    <!-- Program Block -->
    <div class="md:px-0 px-4" id="program-block">
        <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl font-bold">
            {{ $getTextProgram[0]->title_program }}
        </h1>
        <div class="text-center mb-12 text-blue-900 text-xl md:text-2xl">
            {{ $getTextProgram[0]->content_program }}
        </div>

        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($getProgramJob as $program)
                    <a href="{{ route('program.details', $program->id) }}#program-details" class="group bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('assets/program_guaranteed/'. $program->img_card) }}" class="w-full h-56 object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-[#F4F1A1]/50 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-blue-900 group-hover:text-[#1A8B43] transition">
                                {{ $program->title }}
                            </h3>
                            <p class="text-blue-900 mt-3 text-md line-clamp-3">
                                {{ $program->description }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div>
        @component('components.footer')
        @endcomponent
    </div>
</div>
@endsection