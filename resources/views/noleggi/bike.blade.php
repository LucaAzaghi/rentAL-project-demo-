@extends('layout.app')

@section('content')
    <main>
        <div class="col-12 text-white mb-5" style="background-color: #121212; overflow-x: hidden !important;">
            {{-- INIZIO SEZIONE ABBONAMENTI GIORNALIERI --}}
            <section>
                <div class="row">
                    <h4 class="text-center mt-3 p-2" style="background-color: #121212">Abbonamenti giornalieri</h4>

                    <div class="col-6 d-flex justify-content-center">
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                        <div class="col-4 box1 text-center d-flex align-items-center justify-content-center">
                            <div class="column d-flex flex-column justify-content-between h-100 py-3">
                                <div>
                                    <h5 class="ps-2 mt-3 mb-3">bicicletta elettrica</h5>
                                    <h6>0.25€/m + 1€</h6>
                                </div>
                                <a href="{{ route('pagamento') }}"
                                    class="acquista d-inline-flex align-items-center justify-content-center text-decoration-none">
                                    <span>Acquista</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                                </a>
                                <select class="biglietto form-select ticket-quantity ticket-select"
                                    data-name="bicicletta-elettrica">
                                    <option value="0">Seleziona Quantità</option>
                                    <option value="1">1 Biglietto</option>
                                    <option value="2">2 Biglietti</option>
                                    <option value="3">3 Biglietti</option>
                                    <option value="4">4 Biglietti</option>
                                    <option value="5">5 Biglietti</option>
                                    <option value="6">6 Biglietti (Max)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                    </div>

                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                        <div class="col-4 box1 text-center d-flex align-items-center justify-content-center">
                            <div class="column d-flex flex-column justify-content-between h-100 py-3">
                                <div>
                                    <h5 class="ps-2 mt-3 mb-3">monopattino elettrico</h5>
                                    <h6>0.30€/m + 1€</h6>
                                </div>
                                <a href="{{ route('pagamento') }}"
                                    class="acquista acquista2 d-inline-flex align-items-center justify-content-center text-decoration-none">
                                    <span>Acquista</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                                </a>
                                <select id="ticket-quantity" class="biglietto2 form-select ticket-select"
                                    data-name="monopattino-elettrico">
                                    <option value="0">Seleziona Quantità</option>
                                    <option value="1">1 Biglietto</option>
                                    <option value="2">2 Biglietti</option>
                                    <option value="3">3 Biglietti</option>
                                    <option value="4">4 Biglietti</option>
                                    <option value="5">5 Biglietti</option>
                                    <option value="6">6 Biglietti (Max)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                    </div>
                </div>
            </section>

            <br>
            <hr><br>
            {{-- FINE SEZIONE ABBONAMENTI GIORNALIERI --}}

            {{-- INIZIO SEZIONE ABBONAMENTI SETTIMANALI / MENSILI --}}
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-center mt-2 p-2" style="background-color: #121212">Abbonamento settimanale</h4>
                            </div>
                            <div class="col-6">
                                <h4 class="text-center mt-2 p-2" style="background-color: #121212">Abbonamento mensile</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Card Settimanale -->
                    <div class="col-6 d-flex justify-content-center">
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                        <div class="col-4 box1 text-center d-flex align-items-center justify-content-center">
                            <div class="column d-flex flex-column justify-content-between h-100 py-3">
                                <div>
                                    <h5 class="mb-3 mt-3">bicicletta e monopattino</h5>
                                    <ul class="list-unstyled text-white text-start mt-4 px-2" style="font-size: 10px">
                                        <li>✔️ Sbloccaggio gratuito illimitato</li>
                                        <li>✔️ 90 minuti totali consumabili durante la settimana</li>
                                    </ul>
                                </div>
                                <a href="{{ route('pagamento') }}"
                                    class="acquista acquista2 d-inline-flex align-items-center justify-content-center text-decoration-none">
                                    <span>Acquista</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                                </a>
                                <select class="biglietto2 form-select ticket-select"
                                    data-name="bicicletta e monopattino - settimanale">
                                    <option value="0">Seleziona Quantità</option>
                                    <option value="1">1 Biglietto</option>
                                    <option value="2">2 Biglietti</option>
                                    <option value="3">3 Biglietti</option>
                                    <option value="4">4 Biglietti</option>
                                    <option value="5">5 Biglietti</option>
                                    <option value="6">6 Biglietti (Max)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                    </div>

                    <!-- Card Mensile -->
                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                        <div class="col-4 box1 text-center d-flex align-items-center justify-content-center">
                            <div class="column d-flex flex-column justify-content-between h-100 py-3">
                                <div>
                                    <h5 class="mb-2 mt-2">bicicletta e monopattino</h5>
                                    
                                    @php
                                        use Carbon\Carbon;
                                        Carbon::setLocale('it');
                                        $giorniCorrenti = Carbon::now()->daysInMonth;
                                        $nomeMese = ucfirst(Carbon::now()->translatedFormat('F'));
                                        
                                        if ($giorniCorrenti === 31) {
                                            $prezzoMese = '35€';
                                            $minutiMese = '400 minuti totali';
                                        } elseif ($giorniCorrenti === 30) {
                                            $prezzoMese = '33€';
                                            $minutiMese = '380 minuti totali';
                                        } else {
                                            $prezzoMese = '30€';
                                            $minutiMese = '350 minuti totali';
                                        }
                                    @endphp

                                    <span class="text-info fw-bold d-block mt-3 mb-3" style="font-size: 11px;">
                                        {{ $nomeMese }} - {{ $prezzoMese }}
                                    </span>

                                    <ul class="list-unstyled text-white text-start px-2" style="font-size: 10px">
                                        <li>✔️ Sbloccaggio gratuito illimitato</li>
                                        <li>✔️ {{ $minutiMese }} consumabili nel mese</li>
                                    </ul>
                                </div>

                                <a href="{{ route('pagamento') }}"
                                    class="acquista acquista2 d-inline-flex align-items-center justify-content-center text-decoration-none">
                                    <span>Acquista</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
                                </a>
                                <select class="biglietto2 form-select ticket-select"
                                    data-name="bicicletta e monopattino - mensile">
                                    <option value="0">Seleziona Quantità</option>
                                    <option value="1">1 Biglietto</option>
                                    <option value="2">2 Biglietti</option>
                                    <option value="3">3 Biglietti</option>
                                    <option value="4">4 Biglietti</option>
                                    <option value="5">5 Biglietti</option>
                                    <option value="6">6 Biglietti (Max)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 text-center d-flex align-items-center justify-content-center"></div>
                    </div>
                </div>
            </section>
            {{-- FINE SEZIONE ABBONAMENTI SETTIMANALI / MENSILI --}}
        </div>
    </main>
@endsection