
@php
    $activeClass = 'bg-[#68875d] text-white';
    $inactiveClass = 'border-2 border-[#68875d] text-[#68875d] hover:text-white hover:bg-[#68875d]';
@endphp

<div id="growthMenu"
    class="py-4 flex flex-wrap justify-center items-center space-x-4 gap-y-4 overflow-x-auto bg-white">

    <a href="{{ route('about') }}"
       class="p-3 font-medium border-2 border-[#68875d]
       {{ request()->routeIs('about') ? $activeClass : $inactiveClass }}">
        About Growth Master
    </a>

    <a href="{{ route('what.is.growth') }}"
       class="p-3 font-medium border-2 border-[#68875d]
       {{ request()->routeIs('what.is.growth') ? $activeClass : $inactiveClass }}">
        What is Growth Master
    </a>

    <a href="{{ route('Laws.of.eadership') }}"
       class="p-3 font-medium border-2 border-[#68875d]
       {{ request()->routeIs('Laws.of.eadership') ? $activeClass : $inactiveClass }}">
        Leadership Laws
    </a>

    <a href="{{ route('ceo.climp') }}"
       class="p-3 font-medium border-2 border-[#68875d] 
       {{ request()->routeIs('ceo.climp') ? $activeClass : $inactiveClass }}">
        The CEO's Climb
    </a>

    <a href="#"
       class="p-3 font-medium border-2 border-[#68875d] {{ $inactiveClass }}">
        Executive Team
    </a>

    <a href="#"
       class="p-3 font-medium border-2 border-[#68875d] {{ $inactiveClass }}">
        Board
    </a>

    <a href="#"
       class="p-3 font-medium border-2 border-[#68875d] {{ $inactiveClass }}">
        Locations
    </a>

    <a href="#"
       class="p-3 font-medium border-2 border-[#68875d] {{ $inactiveClass }}">
        Press
    </a>

    <a href="#"
       class="p-3 font-medium border-2 border-[#68875d] {{ $inactiveClass }}">
        Careers
    </a>

</div>



{{-- <div id="growthMenu"
    class="py-4 flex flex-wrap justify-center items-center space-x-4 gap-y-4 overflow-x-auto bg-white transition-all duration-300">

    <a href="{{ route('about') }}"
        class="border-2 border-[#124d6b] bg-[#124d6b] text-[#ffffff] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        About Growth Master
    </a>
    <a href="{{ route('what.is.growth') }}"
        class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        What is Growth Master
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Leadership Laws
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        The CEO's Climb
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Executive Team
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Board
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Locations
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Press
    </a>
    <a href="#" class="border-2 border-[#124d6b] text-[#124d6b] hover:text-white hover:bg-[#124d6b] p-3 font-medium">
        Careers
    </a>
</div> --}}