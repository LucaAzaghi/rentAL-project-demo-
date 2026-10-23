<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/rental.css')); ?>">
    <title>rentAL - Accedi</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #121212; margin: 0;">
    <div class="login">
        <div class="rentalLogin">
            <h1 class="mb-4 text-white">rent</h1>
            <img src="immagini/rental2.png" class="logo" alt="Logo"/>
        </div>
        <form class="text-center sezioneMiddle" action="<?php echo e(route('login.azione')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php $__errorArgs = ['credenziali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Email" type="email" name="email" class="mb-2 form-control" value="<?php echo e(old('email')); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Email' è sbagliato</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Password" type="password" name="password" class="mb-2 form-control" id="password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Password' è sbagliato</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button class="text-center accediButton" type="submit">Accedi</button>
        </form>
        <div class="d-flex flex-column sezioneSotto">
            <p class="text-white">Non hai un account? <a class=" qui2" href=<?php echo e(route('register')); ?>>Registrati</a></p>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/auth/login.blade.php ENDPATH**/ ?>