


<?php $__env->startSection('title'); ?>
Registered Roles
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  <div class="container">







    
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header"><h3>edit uusers</h3></div>
                  <div class="card-body">
                  <form action="/update-users/<?php echo e($users->id); ?>" method="post">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field('PUT'); ?>
                           <div class="form-group">
                               <label for="">Users Table Edit</label>
                           <input type="text" name="name" value="<?php echo e($users->name); ?>" class="form-control">
                           </div>
                           <div class="form-group">
                               <select name="role" id="" class="form-control">
                                <option value="admin">admin</option>
                                <option value="doctor">doctor</option>
                                <option value="nurse">nurse</option>
                                <option value="superadmin">superadmin</option>

                               </select>
                              
                           </div>
                           <div>
                               <button type="submit" class="btn btn-primary">update</button>
                               <a href="/dashboard" class="btn btn-danger">cancel</a>
                           </div>
                       </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


  
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\A practical web development files\laravel work\ProjectCreate-HMS\resources\views/edituser.blade.php ENDPATH**/ ?>