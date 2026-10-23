

<?php $__env->startSection('content'); ?>
    <main class="milanBody">
        <div class="backMilan">
            <h1 class="text-center benvenutiSm">Benvenuti a Milano</h1>
        </div>

        <div class="backMilan2 ms-3">
            <h4 class="mt-5 ms-2 ricaricaSm">Scopri i nostri punti di ricarica:</h4>
            <div class="dropdown text-center">
                <button class="stazioneSm btn btn-outline-light dropdown-toggle text-dark px-4 py-2 border-dark" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Seleziona una stazione in città
                </button>
                <div class="dropdown-menu text-center vie p-2 shadow" style="max-height: 250px; overflow-y: auto;">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="via Angelo Inganni">
                            via Angelo Inganni
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Via San Gimignano">
                            Via San Gimignano
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Via Sardegna">
                            Via Sardegna
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="via Morozzo">
                            via Morozzo
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="piazza Mentana">
                            piazza Mentana
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Piazza Duomo">
                            Piazza Duomo
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Via Conservatorio">
                            Via Conservatorio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Corso Indipendenza">
                            Corso Indipendenza
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Via Strambio">
                            Via Strambio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action street-item"
                            data-address="Piazza Amendola">
                            Piazza Amendola
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <iframe item class="milanMap" id="map-frame" allowfullscreen="" loading="lazy"
                src="https://maps.google.com/maps?q=Milano&t=&z=13&ie=UTF8&iwloc=&output=embed">
            </iframe>
        </div>
        <div class="pb-5">
                <p class="text-dark px-4 py-4 rounded scrittaMilano">
                    Con 10 sedi situate dal centro alla periferia della capitale lombarda, rentAL offre un servizio
                    semplice, veloce ed economico per spostarsi al ritmo frenetico di una city che è sempre in movimento. Un
                    noleggio semplice che offre un'alternativa al traffico cittadino e soprattutto
                    <strong>ecologico</strong>.
                </p>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/citta/milano.blade.php ENDPATH**/ ?>