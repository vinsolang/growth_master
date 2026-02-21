<?php $__env->startSection('title', 'Why Join GrowthMaster for business coaching'); ?>
<div class=" w-full h-screen relative  ">
    <!-- Hero Image -->
    
     <?php if(!empty($getBanner) && $getBanner[1]->title === 'membership'): ?>
        <img 
            src="<?php echo e(asset('assets/banner/' . $getBanner[1]->image)); ?>"
            class="w-full h-full object-cover"
            alt="Hero Image"
        >
    <?php endif; ?>

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-30 text-white bg-black/50">

        <h1 class="text-[20px] text-start md:text-[30px] lg:text-[40px] font-semibold max-w-[940px] leading-tight">
            <?php if(!empty($getBanner) && $getBanner[1]->title === 'membership'): ?>
            
            <?php echo nl2br(e(value: $getBanner[1]->name)); ?>

            <?php endif; ?>
        </h1>

        <p class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-regular max-w-[940px] leading-tight">
            <?php if(!empty($getBanner) && $getBanner[1]->title === 'membership'): ?>
            
                <?php echo nl2br(e(value: $getBanner[1]->content)); ?>

            <?php endif; ?>
        </p>
        <a href="<?php echo e(route('home')); ?>#member-form">
            <button class="mt-6 py-5 px-6 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
            GET IN TOUCH
        </button>
        </a>
    </div>
</div>

<div class="flex flex-col  justify-center  items-center mt-10  gap-10">
     <p class="text-start text-[#343434] mx-10 md:mx-[250px]  font-regular text-[17px] md:text-[20px]">
        <?php echo nl2br(e($getContent[0]->content)); ?>

    </p>
    
</div>

  <div class="relative h-[50vh] mt-10">
    <!-- Background Hero Image -->
    <img src="<?php echo e(asset('assets/membership_hero2.jpg')); ?>" class="w-full h-full object-cover" alt="Hero">

    <!-- Overlay Text -->
  <div class="absolute inset-0  flex flex-col justify-center items-center lg:items-end px-6 md:px-16 lg:px-24 text-white text-right">

    <h1 class="text-[20px] md:text-[35px] lg:text-[40px] font-semibold leading-tight max-w-[900px]">
        <?php echo e($getContent[0]->title); ?>

    </h1>

    <p class="mt-5 text-[15px] ps-5 lg:ps-25 text-white  text-start font-bold md:text-[17px] lg:text-[20px]  leading-tight lg:mx-[70px] max-w-[600px]">
        <?php echo nl2br(e($getContent[0]->description)); ?>

    </p>

</div>


</div>
<?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/hero.blade.php ENDPATH**/ ?>