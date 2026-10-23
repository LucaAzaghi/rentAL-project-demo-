// ==========================================
// 1. GESTIONE CARRELLO E SELECT BIGLIETTI
// ==========================================
const ticketSelects = document.querySelectorAll(".ticket-select");
const counterBadge = document.getElementById("cart-counter");

function aggiornaBadgeNavbar() {
    let datiSalvati = JSON.parse(localStorage.getItem("MioCarrello")) || [];
    let totaleBiglietti = datiSalvati.reduce(
        (acc, item) => acc + item.quantita,
        0,
    );

    if (counterBadge) {
        if (totaleBiglietti > 0) {
            counterBadge.innerText = totaleBiglietti;
            counterBadge.style.display = "inline-block";
        } else {
            counterBadge.style.display = "none";
        }
    }
}
aggiornaBadgeNavbar();

if (ticketSelects.length > 0) {
    ticketSelects.forEach((select) => {
        select.addEventListener("change", function () {
            let nomeServizio = this.getAttribute("data-name");
            let quantitaScelta = parseInt(this.value) || 0;
            let carrelloDati =
                JSON.parse(localStorage.getItem("MioCarrello")) || [];

            let index = carrelloDati.findIndex(
                (item) => item.nome === nomeServizio,
            );

            if (quantitaScelta > 0) {
                if (index !== -1) {
                    carrelloDati[index].quantita = quantitaScelta;
                } else {
                    carrelloDati.push({
                        nome: nomeServizio,
                        quantita: quantitaScelta,
                    });
                }
            } else {
                if (index !== -1) {
                    carrelloDati.splice(index, 1);
                }
            }

            localStorage.setItem("MioCarrello", JSON.stringify(carrelloDati));

            aggiornaBadgeNavbar();
        });
    });
}
document.addEventListener('DOMContentLoaded', function () {
    const checkoutForm = document.querySelector('form[action*="pagamento/invia"]');
    
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', function () {
            localStorage.clear();
        });
    }
});

// ==========================================
// 2. STAMPA DEL CARRELLO NEL CHECKOUT
// ==========================================
const cartList = document.getElementById("cart-list");

if (cartList) {
    function mostraCarrello() {
        let datiSalvati = JSON.parse(localStorage.getItem("MioCarrello")) || [];

        if (datiSalvati.length > 0) {
            cartList.innerHTML = "";
            datiSalvati.forEach((item) => {
                let li = document.createElement("li");
                li.className =
                    "text-white small mb-2 d-flex justify-content-between align-items-center border-bottom border-secondary pb-1";
                
                li.innerHTML = `
                    <span>${item.nome}</span> 
                    <div>
                        <span class="badge bg-primary me-2">x${item.quantita}</span>
                        <i class="fa-solid fa-trash fa-sm delete-item" style="color: rgb(203, 47, 17); cursor: pointer;" data-name="${item.nome}"></i>
                    </div>
                `;
                cartList.appendChild(li);
            });

            document.querySelectorAll(".delete-item").forEach((icona) => {
                icona.addEventListener("click", function () {
                    let nomeDaRimuovere = this.getAttribute("data-name");
                    console.log("Hai cliccato per rimuovere:", nomeDaRimuovere);
                    rimuoviDalCarrello(nomeDaRimuovere);
                });
            });

        } else {
            cartList.innerHTML =
                '<li class="small text-center text-white">Nessun abbonamento selezionato</li>';
        }
    }

    function rimuoviDalCarrello(nomeServizio) {
        let datiSalvati = JSON.parse(localStorage.getItem("MioCarrello")) || [];
        
        let nuoviDati = datiSalvati.filter(item => item.nome.trim() !== nomeServizio.trim());

        localStorage.setItem("MioCarrello", JSON.stringify(nuoviDati));

        location.reload();
    }

    mostraCarrello();
}
// ==========================================
// 3. GESTIONE MAPPA INTERATTIVA (Pagina Milano)
// ==========================================
document.querySelectorAll(".street-item").forEach(function (item) {
    item.addEventListener("click", function () {
        let indirizzo = this.getAttribute("data-address");
        let mapFrame = document.getElementById("map-frame");

        if (mapFrame && indirizzo) {
            mapFrame.src =
                "https://maps.google.com/maps?q=" +
                encodeURIComponent(indirizzo) +
                "&t=&z=15&ie=UTF8&iwloc=&output=embed";
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const streetButtons = document.querySelectorAll('.street-item');
    const mapFrame = document.getElementById('map-frame');

    if (mapFrame && streetButtons.length > 0) {
        streetButtons.forEach(button => {
            button.addEventListener('click', function () {
                const address = this.getAttribute('data-address');
                
                const fullQuery = address + ", Milano";
                const encodedQuery = encodeURIComponent(fullQuery);
                
                mapFrame.src = `https://maps.google.com/maps?q=${encodedQuery}&t=&z=16&ie=UTF8&iwloc=&output=embed`;
            });
        });
    }
});
