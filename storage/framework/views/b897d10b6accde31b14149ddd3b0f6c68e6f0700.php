<!DOCTYPE html>
<html>
<head>
    <title>buyers with pagination</title>
</head>
<body>
    <div class="container">
        <h1>buyers with pagination</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Is blocked</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Registration date</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data) && $data->count()): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->id); ?></td>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->surname); ?></td>

                    <?php if( $value->is_blocked == true): ?>
                        <td>True</td>
                    <?php else: ?>
                        <td>False</td>
                    <?php endif; ?>
                    
                    <td><?php echo e($value->phone_number); ?></td>
                    <td><?php echo e($value->email); ?></td>
                    <td><?php echo e($value->registration_date); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo $data->links(); ?>

    </div>
</body>
</html><?php /**PATH /home/miet/apps/u8190324-lab2/resources/views/buyers_with_pagination.blade.php ENDPATH**/ ?>