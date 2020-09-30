<?php $__env->startSection('content'); ?>

        

    

 <?php if($user->role === 'Admin' || $user->role === 'superadmin'): ?>
 <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title"> Active Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <tbody>
                                <?php $__currentLoopData = $userlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>

                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->role); ?></td>


                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
   <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title"> Patient Records</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Patient Name</th>
                                <th>Condition</th>
                                <th>Added by</th>
                                <th>Date</th>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>

                                    <td><?php echo e($rcord->patient_name); ?></td>
                                    <td><?php echo e($rcord->patient_condition); ?></td>
                                    <td><?php echo e($rcord->added_by); ?></td>
                                    <td><?php echo e($rcord->created_at); ?></td>


                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr>
    <td class="text-danger">NO RECORDS FOUND</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
                                    <?php endif; ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Eno\Desktop\ProjectCreate-HMS\resources\views/dashboard.blade.php ENDPATH**/ ?>