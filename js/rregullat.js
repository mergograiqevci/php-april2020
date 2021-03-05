function VendosiNgjyre(elementi) {
    elementi.style.backgroundColor = "#FA8072";
}


function LargojaNgjyren(elementi) {
    elementi.style.backgroundColor = "#232323";
    elementi.style.color = "#FFFFFF";
}

function name() {
    var name = document.getElementById("name").value;
    try {
        if (!isNaN(name)) throw "Emri nuk mund te jete numer";
    }
    catch (err) {
        e.preventDefault();
        alert(err);
        VendosiNgjyre(forma.name);
    }
}

window.onload = function () {
    var forma = document.getElementById("contact-form");
    var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/;

    forma.onsubmit = function (e) {
        var address = forma.email.value;
        var name = document.getElementById("name").value;
        var elementet = document.querySelectorAll(".required");
        for (var j = 0; j < elementet.length; j++) {
            if (EshteZbrazet(elementet[j])) {
                e.preventDefault();
                VendosiNgjyre(elementet[j]);
                alert('Nuk mund ta leni inputin e zbrazet');
            }
            else {
                LargojaNgjyren(elementet[j]);
            }
        }
        if (reg.test(address) == false) {
            e.preventDefault();
            alert('Email adresa qe e keni shkruar nuk eshte ne formatin e duhur');
            VendosiNgjyre(forma.email);
        }
        else {
            try {
                if (!isNaN(name) && name != '') throw "Emri nuk mund te jete numer";
            }
            catch (err) {
                e.preventDefault();
                alert(err);
                VendosiNgjyre(forma.name);
            }
        }
    }
}
