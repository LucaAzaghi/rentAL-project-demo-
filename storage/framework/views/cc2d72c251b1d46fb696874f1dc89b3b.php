

<?php $__env->startSection('content'); ?>
    <main>
        <div class="col-12" style="background-color: #121212">
            <h4 class="text-white text-center pt-5 pb-3">Checkout</h4>
            <div class="row">
                <div class="col-4 text-center text-white">
                    <h5>Carrello</h5>
                    <div class="p-3 rounded border border-secondary carrello"
                        style="background-color: #121212; min-height: 50px; overflow-y: auto;">
                        <ul id="cart-list" class="list-unstyled text-start m-0">
                            <li class="small text-center text-white">Nessun abbonamento selezionato</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 text-center mx-auto" style="padding-top: 25px">
                    <form action="<?php echo e(route('pagamento.invia')); ?>" method="POST" class="d-flex flex-column gap-3">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="Nome" class="form-control"
                            value="<?php echo e(Auth::user()->name); ?>" readonly>
                        <input type="text" name="lastname" placeholder="Cognome" class="form-control"
                            value="<?php echo e(Auth::user()->lastname); ?>" readonly>
                        <input type="email" name="email" placeholder="Email" class="form-control"
                            value="<?php echo e(Auth::user()->email); ?>" readonly>
                        <input type="text" name="card_number" placeholder="Numero Carta" class="form-control">
                        <button type="submit" class="btn btn-primary mt-3">Completa Acquisto</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/auth/check-out-view.blade.php ENDPATH**/ ?>