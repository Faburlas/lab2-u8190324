<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>buyer <?php echo e($buyer1->id); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        td {
            padding-right: 10px;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }

        li {
            margin-bottom: 20px;
        }
    </style>
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
            <?php echo e($buyer->firstName." ".$buyer->lastName); ?>

        </td>
        <td><?php echo e($buyer->phone); ?></td>
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
<?php if($buyer->address != null): ?>
    <h2>Addresses:</h2>
    <ol>
        <?php $__currentLoopData = $buyer->address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div>
                    Common name: <?php echo e($address->commonName); ?>

                </div>
                <div>
                    City: <?php echo e($address->city); ?>

                </div>
                <div>
                    Street: <?php echo e($address->street); ?>

                </div>
                <div>
                    Building: <?php echo e($address->building); ?>

                </div>
                <div>
                    Floor: <?php echo e($address->floor); ?>

                </div>
                <div>
                    Flat: <?php echo e($address->flat); ?>

                </div>
                <div>
                    Access code: <?php echo e($address->accessCode); ?>

                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
<?php endif; ?>
</body>
</html><?php /**PATH /home/miet/apps/u8190324-lab2/resources/views/buyer1.blade.php ENDPATH**/ ?>