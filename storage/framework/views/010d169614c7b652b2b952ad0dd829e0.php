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
    border: 1px solid #d1d5db;
    font-family: inherit;
}

/* Header */
.ck-content table thead {
    background-color: #68875d; /* Match image green */
}

.ck-content table thead th {
    color: #ffffff;
    font-weight: 600;
    text-align: center;
    padding: 18px 20px;
    font-size: 22px;
    background-color: #68875d;
    border: 1px solid #d1d5db;
}

/* Body Cells */
.ck-content table tbody td {
    padding: 22px 24px;
    border: 1px solid #d1d5db;
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

/* Row Background (Light Gray like image) */
.ck-content table tbody tr {
    background-color: #f9fafb;
}

/* Slight alternate effect (optional but closer to image) */
.ck-content table tbody tr:nth-child(even) {
    background-color: #f3f4f6;
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

    <h1 class="text-center text-[22px] md:text-[30px] text-black font-bold">
         <?php echo e($getContent[0]->title_1); ?>

    </h1>

    <p class="text-center text-[15px] md:text-[20px] mt-5">
        <?php echo nl2br(e($getContent[0]->description_1)); ?>

    </p>

    <!-- Responsive Table Wrapper -->
    <div class="ck-content overflow-x-hidden mt-10 px-3">
        <div class="ck-content overflow-x-auto max-w-5xl mx-auto">
            <?php echo $getContent[0]->table; ?>

        </div>
    <p class="mt-5 text-center text-[16px] md:text-[18px] max-w-[700px] mx-auto px-3">
        <?php echo nl2br(e($getContent[0]->text)); ?>

    </p>

    <div class="flex justify-center items-center mt-10">
        <a href="<?php echo e(route('form.input')); ?>"
            class="group py-3 px-[25px] text-[16px] md:text-[18px] border border-[#68875d]
            text-[#68875d] bg-white rounded 
            transition-all duration-300 ease-in-out
            hover:bg-[#68875d] hover:text-white">

            Become A Member

            <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                <i class="fa-solid fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>


  <div class="mt-10 px-4">

    <!-- Heading -->
    <h1 class="text-center text-black font-semibold text-[22px] md:text-[28px] lg:text-[32px] max-w-[900px] mx-auto">
        <?php echo e($getContent[0]->title_2); ?>

    </h1>

    <p class="mt-5 text-[16px] md:text-[18px] text-left max-w-[850px] mx-auto">
         <?php echo nl2br(e($getContent[0]->description_3)); ?>

    </p>

    <!-- Cards Section -->
    <div class="mt-10">
        <div class="flex flex-col md:flex-row justify-center items-start md:items-stretch gap-8 mt-10">

            <!-- Card 1 -->
            <div class="bg-[#68875d] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3"> <?php echo e($getContent[0]->title_card_1); ?></h1>

                <p class="text-start text-white mt-4">
                    <?php echo nl2br(e($getContent[0]->desc_card_1)); ?>

                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#68875d] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3"><?php echo e($getContent[0]->title_card_2); ?></h1>

                <p class="text-start text-white mt-4">
                    
                    <?php echo nl2br(e($getContent[0]->desc_card_2)); ?>

                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#68875d] py-10 px-8 text-center md:w-[350px] rounded-lg">
                <i class="fa-solid fa-user text-white text-[36px]"></i>
                <h1 class="text-[#ffffff] text-[20px] md:text-[22px] font-semibold mt-3"><?php echo e($getContent[0]->title_card_3); ?></h1>

                <p class="text-start text-white mt-4">
                 
                    <?php echo nl2br(e($getContent[0]->desc_card_3)); ?>

                </p>
            </div>

        </div>
    </div>

</div>


</div>



<?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/strategic.blade.php ENDPATH**/ ?>