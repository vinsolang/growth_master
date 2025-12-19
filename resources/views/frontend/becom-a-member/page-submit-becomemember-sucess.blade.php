@extends('layout.app')

@section('content')
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .fade-in {
            animation: fadeIn .3s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <div id="eventPage" class="space-y-45">
        @component('components.navbar')
        @endcomponent

        <div class="relative w-full top-40">
            <h1 class="flex justify-center items-center text-[#000000] text-4xl md:text-4xl font-semibold xl:text-5xl text-left px-2 md:px-12 w-full">Thank you for your interest</h1>
        </div>

        <div class="space-y-6">
            <p class="flex justify-center items-center text-[#141826] max-w-[65%] mx-auto font-normal text-[20px] text-left py-10 px-8 md:px-12">Great news: We have assigned your application to Michael Fletcher, a Market Manager, to learn more about your needs and what you are looking to accomplish with Vistage.</p>
            {{-- Block card element --}}
            <div class="flex justify-center items-center space-x-8">
                <div class="w-40 h-40">
                    <img src="https://www.vistage.com/wp-content/uploads/2023/03/tt-Michael-Fletcher-150x150.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="text-[#333333] text-xl font-medium">
                    <p>Michael Fletcher</p>
                    <p>Market Manager</p>
                </div>
            </div>            
            <p class="flex justify-center items-center text-[#141826] font-medium text-[20px] text-left py-10 px-8 w-full md:px-12">To schedule a call with Michael, please select a date and time that works best for you.</p>
            {{-- Calender --}}
            <div class="bg-gray-100 min-h-screen flex items-center justify-center">
                <!-- CARD -->
                <div class="bg-white w-full max-w-6xl rounded-xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">

                    <!-- LEFT PANEL -->
                    <div class="p-10 space-y-8 border-r">
                        <h1 class="text-5xl font-extrabold text-teal-800 uppercase">Growth Master</h1>

                        <div class="space-y-2">
                            <p class="text-gray-600 font-semibold">Michael Fletcher</p>
                            <h2 class="text-3xl font-bold">45 Minute Meeting</h2>
                        </div>

                        <div class="flex items-center space-x-2 text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 6v6l4 2"/>
                            </svg>
                            <span class="font-medium">45 min</span>
                        </div>
                    </div>

                    <!-- RIGHT PANEL -->
                    <div class="p-10 relative">

                        <!-- Powered by -->
                        <div class="absolute top-0 right-0 bg-gray-700 text-white text-xs px-4 py-2 rotate-45 translate-x-12 -translate-y-2">
                            Powered by Calendly
                        </div>

                        <h2 class="text-2xl font-bold mb-6">Select a Date & Time</h2>

                        <!-- Month Navigation -->
                        <div class="flex items-center justify-center space-x-6 mb-6">
                            <button id="prevMonth" class="text-2xl text-gray-500 hover:text-black">&lsaquo;</button>
                            <span id="monthLabel" class="text-lg font-semibold">December 2025</span>
                            <button id="nextMonth" class="text-2xl text-blue-600 hover:text-blue-800">&rsaquo;</button>
                        </div>

                        <!-- Days -->
                        <div class="grid grid-cols-7 text-center text-sm font-semibold text-gray-500 mb-3">
                            <span>MON</span><span>TUE</span><span>WED</span>
                            <span>THU</span><span>FRI</span><span>SAT</span><span>SUN</span>
                        </div>

                        <!-- Calendar Grid -->
                        <div class="grid grid-cols-7 gap-y-6 text-center text-gray-700 relative">
                            <!-- Empty -->
                            <span></span>

                            <!-- Days -->
                            <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span>
                            <span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span>
                            <span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span>
                            <span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span>
                            <span>28</span><span>29</span><span>30</span><span>31</span>

                            <!-- No Times Bubble -->
                            <div class="absolute left-1/2 top-[55%] -translate-x-1/2 bg-white shadow-xl rounded-full px-6 py-3 text-center">
                                <p class="text-sm text-gray-600">No times in December</p>
                                <button class="text-blue-600 font-semibold mt-1 flex items-center justify-center gap-1">
                                    View next month
                                    <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>

                        <!-- Timezone -->
                        <div class="mt-14">
                            <p class="text-sm font-semibold text-gray-700 mb-2">Time zone</p>
                            <button class="flex items-center space-x-2 text-blue-600 font-medium">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M2 12h20M12 2a15.3 15.3 0 010 20"/>
                                </svg>
                                <span>Indochina Time (11:57)</span>
                                <span>&#9662;</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            @component('components.footer')
            @endcomponent
        </div>
    </div>
{{-- JS --}}
<script>
/* =======================
   REAL CALENDAR LOGIC
======================= */

const calendarEl = document.getElementById("calendar");
const monthLabel = document.getElementById("monthLabel");
const timesWrapper = document.getElementById("timesWrapper");
const timesEl = document.getElementById("times");

let currentDate = new Date();
const today = new Date();

/* Fake availability (real app = API) */
const availableDays = [3, 5, 8, 12, 15, 18, 22];
const availableTimes = [
    "09:00 AM", "10:00 AM",
    "01:00 PM", "02:30 PM"
];

function renderCalendar() {
    calendarEl.innerHTML = "";
    timesWrapper.classList.add("hidden");

    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    monthLabel.textContent = currentDate.toLocaleString("default", {
        month: "long", year: "numeric"
    });

    let firstDay = new Date(year, month, 1).getDay() || 7;
    let daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 1; i < firstDay; i++) {
        calendarEl.innerHTML += `<div></div>`;
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const isAvailable = availableDays.includes(day);

        calendarEl.innerHTML += `
            <button
                class="
                h-10 w-10 rounded-full mx-auto
                ${isAvailable ? 'bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white' : 'text-gray-400 cursor-not-allowed'}
                transition
                "
                ${isAvailable ? '' : 'disabled'}
                onclick="selectDay(${day})"
            >
                ${day}
            </button>
        `;
    }
}

window.selectDay = function(day) {
    timesWrapper.classList.remove("hidden");
    timesEl.innerHTML = "";

    availableTimes.forEach(time => {
        timesEl.innerHTML += `
            <button class="
                border rounded-md py-2 text-sm
                hover:bg-blue-600 hover:text-white transition
            ">
                ${time}
            </button>
        `;
    });
}

/* NAV */
document.getElementById("prevMonth").onclick = () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
};

document.getElementById("nextMonth").onclick = () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
};

renderCalendar();
</script>
@endsection