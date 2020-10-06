
<?php $__env->startSection('content'); ?>

       
 
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
                                <th>Date</th>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                  <tr>
                                    <td><?php echo e($record->patient_name); ?></td>
                                    <td><?php echo e($record->patient_condition); ?></td>
                                    <td><?php echo e($record->created_at); ?></td>


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


<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\A practical web development files\laravel work\ProjectCreate-HMS\resources\views/PatientRecord.blade.php ENDPATH**/ ?>