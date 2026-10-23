<nav class="navbar navbar-expand-lg navSettings" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center me-auto" href="<?php echo e(route('homepage')); ?>">
            <span class="scrittaRental">RENT</span>
            <img src="<?php echo e(asset('immagini/rental3.png')); ?>" alt="Logo" class="logoNav">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link chiSiamo active chiSiamoSmall text-white" aria-current="page"
                        href="<?php echo e(route('about')); ?>">Chi siamo</a>
                </li>
                <li class="nav-item dropdown prezziSm">
                    <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Prezzi e info abbonamenti
                    </a>
                    <ul class="dropdown-menu prezziMenu">
                        <li><a class="dropdown-item text-white" href="<?php echo e(route('giorno')); ?>">Giornaliero</a></li>
                        <li><a class="dropdown-item text-white" href="<?php echo e(route('settimana')); ?>">Settimanale</a></li>
                        <li><a class="dropdown-item text-white" href="<?php echo e(route('mese')); ?>">Mensile</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown citySm">
                    <a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Città
                    </a>
                    <ul class="dropdown-menu cittaMenu">
                        <li><a class="dropdown-item text-white" href="<?php echo e(route('milano')); ?>">Milano</a></li>
                        <li><span class="dropdown-item text-secondary disabled" aria-disabled="true">Prossimamente...</span></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white abbonamentoSm" aria-current="page"
                        href="<?php echo e(route('abbonamenti')); ?>">Acquista
                        abbonamento</a>
                </li>
                <li class="nav-item ms-lg-auto ticketBack">
                    <a class="nav-link active me-3 ticketLink" aria-current="page" href="<?php echo e(route('pagamento')); ?>">
                        <i class="fa-solid fa-ticket iconaTicket"></i>
                        <span id="cart-counter" class="ticketListner translate-middle badge"></span>
                    </a>
                </li>
                <li class="nav-item backProfilo">
                    <a class="profilo nav-link active text-white" aria-current="page" href="#">
                        <?php if(auth()->guard()->check()): ?>
                            <?php echo e(strtoupper(substr(Auth::user()->name, 0, 1))); ?>

                        <?php endif; ?>
                    </a>
                    <span class="testoUtente">Bentornato <?php if(auth()->guard()->check()): ?> <?php echo e(Auth::user()->name); ?> <?php else: ?> Nome <?php endif; ?></span>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item logoutBack">
                            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline"
                                onsubmit="return confirm('Confermi disconnessione?');">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="nav-link text-center logout p-1 active">Logout</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/components/navbar.blade.php ENDPATH**/ ?>