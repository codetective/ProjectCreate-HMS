
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpha HMS</title>
    <link rel="stylesheet" href=<?php echo e(asset('css/bootstrap.min.css')); ?>>
    <!-- Latest compiled and minified CSS -->
</head>

<body>

    <div class="container">
          <?php echo e($slot); ?>

    </div>

    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\user\Documents\A practical web development files\laravel work\ProjectCreate-HMS\resources\views/layouts/guest.blade.php ENDPATH**/ ?>