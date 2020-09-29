
<section>

        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">

                <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
                <a class="navbar-brand" href="/">ALPHA-HMS</a>
                <!--<a class="navbar-brand" href="#">
                <img src="..." class="d-inline-block align-top" width="30" height="30" alt="...">My Brand
            </a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if(Route::has('login')): ?>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <?php if(auth()->guard()->check()): ?>
                    <?php if($user_type === 'Admin' ||$user_type ==='superadmin' ): ?>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register new user</a>
                    </li>
                        
                    <?php endif; ?>
                <li class="nav-item">
                      <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                </form>
                    </li>
<?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                     <?php endif; ?>
                </ul>
            </div>
                <?php endif; ?>

        </div>
    
        </nav>
    <div class="container">
  <?php if($errors->any()): ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>
<h5 class="text-center display-5"><?php echo e($user_type); ?> Dashboard</h5>
    </div>
</section>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\A practical web development files\laravel work\ProjectCreate-HMS\resources\views/dashboard.blade.php ENDPATH**/ ?>