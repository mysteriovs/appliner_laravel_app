<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
<div class="text-white w-1/5 float-left text-center relative" style="background-color:#393939;font-family: 'Ubuntu', sans-serif;">
  <img src="website_prototype/logo_a1_1.png" class="mt-5 block ml-auto mr-auto"/>
<?php if($logo=="true"): ?>
  <div class="absolute top-8 right-0 font-extrabold text-5xl">app</div>
<?php endif; ?>
  <ol class="list-none text-2xl mt-12 font-light">
    <li class="mt-4"><a href="<?php echo e(route('home')); ?>">home</a></li>
    <li class="mt-4"><a href="<?php echo e(route('login')); ?>">sign in</a></li>
    <li class="mt-4"><a href="<?php echo e(route('register')); ?>">sign up</a></li>
    <li class="mt-4"><a href="<?php echo e(route('dashboard')); ?>">my panel</a></li>
    <li class="mt-4">appliner</li>
    <li class="mt-4">about us</li>
    <li class="mt-4">contact</li>
  </ol>
</div>
<?php /**PATH C:\appliner\appliner_laravel_app\resources\views/components/nav.blade.php ENDPATH**/ ?>