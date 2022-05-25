<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" conten="ie=edge">
    <title>All buyers</title>
</head>

<body>
    <table border="1">
        <caption>All buyers from database</caption>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone number</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">

            <tr>
                <td><?php echo e($element-> name); ?></td>
                <td><?php echo e($element-> surname); ?></td>
                <td><?php echo e($element-> email); ?></td>
                <td><?php echo e($element-> phone_number); ?></td>
            </tr>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html><?php /**PATH /home/miet/apps/u8190324-lab2/resources/views/messages.blade.php ENDPATH**/ ?>