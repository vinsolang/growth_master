
<div class="space-y-4" id="member-form">
        <h1 class="text-center text-blue-900 text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
             <?php echo nl2br(e($getHomeContent[0]->title_below)); ?>

        </h1>
        <p class="text-blue-900 text-lg md:text-xl text-left max-w-[60%] mx-auto">
             <?php echo nl2br(e($getHomeContent[0]->desc_bolow)); ?>

        </p>
    </div>
            <div class="py-6 text-blue-900">
                <form action="<?php echo e(route('memberships.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="max-w-7xl mx-auto p-6">
                        <!-- ================= Contact Information ================= -->
                        <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                        <hr class="mb-6 w-1/2 border-gray-300">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                            <!-- First Name -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    First name <span class="text-orange-500">*</span>
                                </label>
                                <input name="firstname" type="text" value="<?php echo e(old('firstname')); ?>"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Last Name -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Last name <span class="text-orange-500">*</span>
                                </label>
                                <input type="text" name="lastname" value="<?php echo e(old('lastname')); ?>"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Business Email -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Email Address<span class="text-orange-500">*</span>
                                </label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Mobile Phone -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Phone Number<span class="text-orange-500">*</span>
                                </label>
                                <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        </div>

                        <!-- ================= Company Information ================= -->
                        <h2 class="text-xl font-semibold mt-12 mb-2">Company Information</h2>
                        <hr class="mb-6 w-1/2 border-gray-300">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                            <!-- Company -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Company Name<span class="text-orange-500">*</span>
                                </label>
                                <input type="text" name="company" value="<?php echo e(old('company')); ?>"
                                    class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                                <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Professional Role -->
                            <div>
                                <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                    Professional Role <span class="text-orange-500">*</span>
                                    <span
                                        class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                </label>
                                <select name="role"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                    <option value="">Please select</option>
                                    <option value="Founder/Owner" <?php echo e(old('role') == 'Founder/Owner' ? 'selected' : ''); ?>>
                                        Founder/Owner</option>
                                    <option value="Chief Executive/President/GM" <?php echo e(old('role') == 'Chief Executive/President/GM' ? 'selected' : ''); ?>>Chief Executive/President/GM
                                    </option>
                                    <option value="C-level (non-CEO), Executive VP" <?php echo e(old('role') == 'C-level (non-CEO), Executive VP' ? 'selected' : ''); ?>>C-level (non-CEO), Executive VP</option>
                                    <option value="Vice President/Division Head" <?php echo e(old('role') == 'Vice President/Division Head' ? 'selected' : ''); ?>>Vice President/Division Head
                                    </option>
                                    <option value="Director" <?php echo e(old('role') == 'Director' ? 'selected' : ''); ?>>Director
                                    </option>
                                    <option value="Manager" <?php echo e(old('role') == 'Manager' ? 'selected' : ''); ?>>Manager
                                    </option>
                                    <option value="Consultant/Business Development/Sales" <?php echo e(old('role') == 'Consultant/Business Development/Sales' ? 'selected' : ''); ?>>
                                        Consultant/Business Development/Sales</option>
                                    <option value="Other (non-managerial)" <?php echo e(old('role') == 'Other (non-managerial)' ? 'selected' : ''); ?>>Other (non-managerial)</option>
                                </select>
                                <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- staff -->
                            <div class="space-y-8">
                                <label class="flex items-center text-sm font-medium mb-2 gap-1">
                                    How many staffs do you have?  <span class="text-orange-500">*</span>
                                    <span
                                        class="w-4 h-4 flex items-center justify-center text-xs text-white bg-gray-600 rounded-full cursor-pointer">?</span>
                                </label>
                                <select name="staff"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                                    
                                    <option value="">Please select</option>

                                    <option value="1-5" <?php echo e(old('staff') == '1-5' ? 'selected' : ''); ?>>1 - 5</option>
                                    <option value="6-10" <?php echo e(old('staff') == '6-10' ? 'selected' : ''); ?>>6 - 10</option>
                                    <option value="11-20" <?php echo e(old('staff') == '11-20' ? 'selected' : ''); ?>>11 - 20</option>
                                    <option value="21-40" <?php echo e(old('staff') == '21-40' ? 'selected' : ''); ?>>21 - 40</option>
                                    <option value="41-70" <?php echo e(old('staff') == '41-70' ? 'selected' : ''); ?>>41 - 70</option>
                                    <option value="71-100" <?php echo e(old('staff') == '71-100' ? 'selected' : ''); ?>>71 - 100</option>
                                    <option value="100 Above" <?php echo e(old('staff') == '100 Above' ? 'selected' : ''); ?>>100 Above</option>
                                </select>
                                <?php $__errorArgs = ['staff'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                <hr class="mb-6 border-gray-300">
                                <select name="source" id="sourceSelect"
                                    class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">

                                    <option value="">How do you learn about Growth Master?</option>

                                    <option value="Recommend by Friends" <?php echo e(old('source') == 'Recommend by Friends' ? 'selected' : ''); ?>>
                                        Recommend by Friends
                                    </option>

                                    <option value="Social Media" <?php echo e(old('source') == 'Social Media' ? 'selected' : ''); ?>>
                                        Social Media
                                    </option>

                                    <option value="Joined Events" <?php echo e(old('source') == 'Joined Events' ? 'selected' : ''); ?>>
                                        Joined Events
                                    </option>
                                </select>
                                <?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <hr class="mb-6 border-gray-300">
                                <p class="text-gray-600 rounded-md px-4 font-semibold">
                                    * Indicates Response Required <br />
                                    Message and data rates may apply.
                                </p>
                            </div>

                        </div>

                    </div>
                    
                    
                    <div class="flex justify-center text-xl mt-10">
                        <button type="submit"
                            class="inline-flex items-center justify-center w-72 h-14 bg-red-600 hover:bg-blue-900 text-[#ffffff] font-semibold uppercase cursor-pointer">
                            Become a member 
                        </button>
                    </div>
                </form>

            </div>

<!-- Postal Code -->
<?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/include/form.blade.php ENDPATH**/ ?>