@extends('layout.app')

@section('content')
    <div class="text-center ps-5 pe-5">
        <h1 style="background-color: #121212; color: white; padding-top: 40px;" class="text-center">Abbonamenti Mensili</h1>
        <h6 class="text-danger">IL PREZZO DI QUESTO ABBONAMENTO PUO' VARIARE A SECONDA DEL MESE DI UTILIZZO(che sia 28 o 31 giorni)</h6>
        <p style="background-color: #121212; color: white;">Il servizio è attivo 24/7 dal lunedì alla domenica</p>
        <div class="col-12 row">
            <div class="col-lg-4 mese1">
                <p style="background-color: #121212; color: white; padding-top: 45px;" class="ps-5 pe-5">
                    L'abbonamento è uguale per entrambi e costa <strong>35€</strong> per i mesi con 31 giorni.<br>
                    Il pacchetto include:<br>
                    <div class="text-center">
                        <div class="d-inline-block text-start">
                            <ul class="list-unstyled text-white mb-0">
                                <li>✔️ Sbloccaggio gratuito illimitato</li>
                                <li>✔️ <strong>400 minuti totali</strong> consumabili nel mese</li>
                            </ul>
                        </div>
                    </div>
                </p>
                <div class="mt-4">
                        @if ($giorniDelMese === 31)
                            <span class="badge bg-success px-3 py-2">Valido per il mese corrente</span>
                        @else
                            <span class="badge bg-secondary px-3 py-2">Non disponibile</span>
                        @endif
                    </div>
            </div>
            <div class="col-lg-4 mese2">
                <p style="background-color: #121212; color: white; padding-top: 45px;" class="ps-5 pe-5">
                    L'abbonamento è uguale per entrambi e costa 33€ per i mesi con 30 giorni.<br>
                    Il pacchetto include:<br>
                    <div class="text-center">
                        <div class="d-inline-block text-start">
                            <ul class="list-unstyled text-white mb-0">
                                <li>✔️ Sbloccaggio gratuito illimitato</li>
                                <li>✔️<strong>380 minuti totali</strong> consumabili nel mese</li>
                            </ul>
                        </div>
                    </div>
                </p>
                <div class="mt-4">
                        @if ($giorniDelMese === 30)
                            <span class="badge bg-success px-3 py-2">Valido per il mese corrente</span>
                        @else
                            <span class="badge bg-secondary px-3 py-2">Non disponibile</span>
                        @endif
                    </div>
            </div>
            <div class="col-lg-4 mese3">
                <p style="background-color: #121212; color: white; padding-top: 45px;" class="ps-5 pe-5">
                    L'abbonamento è uguale per entrambi e costa 30€ per i mesi con 28 giorni.<br>
                    Il pacchetto include:<br>
                    <div class="text-center">
                        <div class="d-inline-block text-start">
                            <ul class="list-unstyled text-white mb-0">
                                <li>✔️ Sbloccaggio gratuito illimitato</li>
                                <li>✔️<strong>350 minuti totali</strong> consumabili nel mese</li>
                            </ul>
                        </div>
                    </div>
                </p>
                <div class="mt-4">
                        @if ($giorniDelMese === 28)
                            <span class="badge bg-success px-3 py-2">Valido per il mese corrente</span>
                        @else
                            <span class="badge bg-secondary px-3 py-2">Non disponibile</span>
                        @endif
                    </div>
            </div>
            </div>
        </div>
    </div>
@endsection