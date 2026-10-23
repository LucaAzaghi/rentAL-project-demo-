<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rentAL - Acquisto Completato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="text-center p-5 bg-white text-dark rounded shadow-lg" style="max-width: 500px; width: 100%;">
        <div class="mb-4 text-success display-1">
            &#10004;
        </div>
        
        <h1 class="h3 mb-3 font-weight-bold">Grazie per il tuo acquisto!</h1>
        <p class="text-muted mb-4">Il tuo abbonamento su rentAL è stato attivato con successo.</p>

        <?php if(session('codice')): ?>
            <div class="p-3 mb-4 bg-light border rounded">
                <span class="d-block small text-muted uppercase">Il tuo codice abbonamento:</span>
                <strong class="h4 text-primary tracking-wide"><?php echo e(session('codice')); ?></strong>
            </div>
            <p class="small text-muted"><strong>Conserva questo codice o inseriscilo direttamente nell'applicazione per sbloccare il mezzo.</strong></p>
        <?php endif; ?>

        <a href="<?php echo e(route('homepage')); ?>" class="btn btn-dark w-100 mt-3">Torna alla Home</a>
    </div>

</body>
</html><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/auth/successo-ordine.blade.php ENDPATH**/ ?>