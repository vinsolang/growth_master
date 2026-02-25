<style>
/* Wrapper */
.table-wrapper {
    overflow-x: auto;
}

/* Table */
.ck-content table {
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    border-collapse: collapse;
    border: 1px solid #DBDBDB; /* Light Gray from branding */
    font-family: inherit;
}

/* Header */
.ck-content table thead {
    background-color: #1A8B43; /* Green for success / brand growth */
}

.ck-content table thead th {
    color: #FFFFFF; /* White text for contrast */
    font-weight: 600;
    text-align: center;
    padding: 18px 20px;
    font-size: 22px;
    border: 1px solid #DBDBDB; /* Light Gray borders */
}

/* Body Cells */
.ck-content table tbody td {
    padding: 22px 24px;
    border: 1px solid #DBDBDB;
    font-size: 16px;
    line-height: 1.8;
    vertical-align: middle;
}

/* First Column (Challenges) */
.ck-content table tbody td:first-child {
    width: 22%;
    font-weight: 500;
}

/* Second & Third Columns */
.ck-content table tbody td:nth-child(2),
.ck-content table tbody td:nth-child(3) {
    width: 39%;
}

/* Row Background (Light Gray for readability) */
.ck-content table tbody tr {
    background-color: #F4F1A1; /* Soft Yellow for subtle warmth */
}

/* Slight alternate effect for clarity */
.ck-content table tbody tr:nth-child(even) {
    background-color: #DBDBDB; /* Light Gray from branding */
}

/* Responsive */
@media (max-width: 768px) {
    .ck-content table thead th {
        font-size: 14px;
        padding: 12px;
    }

    .ck-content table tbody td {
        font-size: 13px;
        padding: 14px;
    }
}

</style>
<div class="mt-10 px-4">

    <h1 class="text-center text-[22px] md:text-[30px] text-blue-900 font-bold">
         {{ $getContent[0]->title_1 }}
    </h1>

    <p class="text-center text-blue-900 text-[15px] md:text-[20px] mt-5">
        {!! nl2br(e($getContent[0]->description_1)) !!}
    </p>

    <!-- Responsive Table Wrapper -->
    <div class="ck-content overflow-x-hidden mt-10 px-3">
        <div class="ck-content overflow-x-auto max-w-5xl mx-auto">
            {!! $getContent[0]->table !!}
        </div>
    <p class="mt-5 text-center text-[16px] text-blue-900 md:text-[18px] max-w-[700px] mx-auto px-3">
        {!! nl2br(e($getContent[0]->text)) !!}
    </p>

    <div class="flex justify-center items-center mt-10">
        <a href="{{ route('form.input') }}"
            class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
        text-[#D82129] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#D82129] hover:text-white font-semibold">

            Become A Member

            <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                <i class="fa-solid fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>


  <div class="mt-10 px-4">

    <!-- Heading -->
    <h1 class="text-center text-blue-900 font-semibold text-[22px] md:text-[28px] lg:text-[32px] max-w-[900px] mx-auto">
        {{ $getContent[0]->title_2 }}
    </h1>

    <p class="mt-5 text-blue-900 text-[16px] md:text-[18px] text-left max-w-[850px] mx-auto">
         {!! nl2br(e($getContent[0]->description_3)) !!}
    </p>

    <!-- Cards Section -->
    <div class="mt-10">
        <div class="flex flex-col md:flex-row justify-center items-start md:items-stretch gap-8 mt-10">

            <!-- Card 1 -->
            <div class="bg-[#2A2D79] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3"> {{ $getContent[0]->title_card_1 }}</h1>

                <p class="text-start text-white mt-4">
                    {!! nl2br(e($getContent[0]->desc_card_1)) !!}
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#2A2D79] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3">{{ $getContent[0]->title_card_2 }}</h1>

                <p class="text-start text-white mt-4">
                    
                    {!! nl2br(e($getContent[0]->desc_card_2)) !!}
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#2A2D79] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3">{{ $getContent[0]->title_card_3 }}</h1>

                <p class="text-start text-white mt-4">
                 
                    {!! nl2br(e($getContent[0]->desc_card_3)) !!}
                </p>
            </div>

        </div>
    </div>

</div>


</div>


{{-- <table class="border-collapse border border-gray-400 w-full max-w-[900px] mx-[-10px] md:mx-auto text-left">
        <thead class="bg-[#68875d] text-[#ffffff]">
            <tr>
                <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                    Challenges
                </th>
                <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                    Your Current Reality
                </th>
                <th class="border border-gray-300 py-3 px-4 text-center text-[14px] md:text-[20px] lg:text-[24px] font-semibold">
                    With GrowthMaster Advisory
                </th>
            </tr>
        </thead>

        <tbody class="text-[13px] md:text-[16px] leading-relaxed">
            <tr>
                <td class="border border-gray-300 py-3 px-4">Financial numbers (LTM)</td>
                <td class="border border-gray-300 py-3 px-4">Limited financial literacy creates hesitation and
                    uncertainty when discussing financial performance.
                </td>
                <td class="border border-gray-300 py-3 px-4">You gain clarity through guidance from certified mentors
                    and insights from 10–15 peer CEOs who have tackled similar challenges.
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 py-3 px-4">Financial analysis</td>
                <td class="border border-gray-300 py-3 px-4">You rely on costly trial-and-error learning, often
                    uncovering issues only after they negatively impact your business.
                </td>
                <td class="border border-gray-300 py-3 px-4">You adopt proven analytical frameworks that help identify
                    risks early and avoid costly mistakes.
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 py-3 px-4">Setting Business KPIs</td>
                <td class="border border-gray-300 py-3 px-4">You often focus on activity-based KPIs instead of
                    measurable, outcome-driven ones.
                </td>
                <td class="border border-gray-300 py-3 px-4">Mentors guide you step-by-step in establishing clear,
                    measurable KPIs aligned with financial and strategic goals.
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 py-3 px-4">Sales Planning</td>
                <td class="border border-gray-300 py-3 px-4">You plan in isolation, missing valuable cross-industry insights.
                </td>
                <td class="border border-gray-300 py-3 px-4">You leverage collective wisdom from CEOs across industries
                    and receive simplified templates to build effective sales plans.
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 py-3 px-4">Financial Planning & Budgeting</td>
                <td class="border border-gray-300 py-3 px-4">Lack of structured budgeting leads to reactive decisions,
                    cash flow issues, and difficulty forecasting.
                </td>
                <td class="border border-gray-300 py-3 px-4">Mentors help you create structured budgets, reliable
                    forecasts, and implement financial discipline.
                </td>
            </tr>

            <tr>
                <td class="border border-gray-300 py-3 px-4">Growth Strategies 360°</td>
                <td class="border border-gray-300 py-3 px-4">Your growth initiatives may be fragmented or based on intuition.
                </td>
                <td class="border border-gray-300 py-3 px-4">You develop a 360° growth roadmap integrating market,
                    product, financial, and operations strategy.
                </td>
            </tr>
        </tbody>
    </table> --}}
