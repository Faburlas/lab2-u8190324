<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>buyer <?php echo e($buyer->id); ?></title>
</head>
<body>
<h1>User info:</h1>
<table>
    <tr>
        <td>
            Id
        </td>
        <td>
            Name
        </td>
        <td>
            Phone
        </td>
        <td>
            E-mail
        </td>
        <td>
            Is blocked?
        </td>
    </tr>
    <tr>
        <td><?php echo e($buyer->id); ?></td>
        <td>
            <?php echo e($buyer->name." ".$buyer->surname); ?>

        </td>
        <td><?php echo e($buyer->phone_number); ?></td>
        <td><?php echo e($buyer->email); ?></td>
        <td>
            <?php if($buyer->blocked): ?>
                blocked
            <?php else: ?>
                not blocked
            <?php endif; ?>
        </td>
    </tr>
</table>
<?php if($buyer->addresses != null): ?>
    <h2>Addresses:</h2>
    <ol>
        <?php $__currentLoopData = $buyer->addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div>
                    Address: <?php echo e($address->address); ?>

                </div>
                <div>
                    City: <?php echo e($address->city); ?>

                </div>
                <div>
                    Street: <?php echo e($address->street); ?>

                </div>
                <div>
                    House: <?php echo e($address->house); ?>

                </div>
                <div>
                    Floor: <?php echo e($address->floor); ?>

                </div>
                <div>
                    Flat: <?php echo e($address->flat); ?>

                </div>
                <div>
                    Code: <?php echo e($address->code); ?>

                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
<?php endif; ?>
</body>
</html><?php /**PATH /home/miet/apps/u8190324-lab2/resources/views/buyer.blade.php ENDPATH**/ ?>