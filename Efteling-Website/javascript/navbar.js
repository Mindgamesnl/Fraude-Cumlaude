//trigger  voor de page load, s inds de DOM objecten geladen moeten zijn
onload = function () {
    const all = document.getElementsByTagName("a");

    //loop voor alle a elementen
    for (let i=0, max=all.length; i < max; i++) {
        // check of href eindigt op de url, dus file.
        if (all[i].href.endsWith(document.location.pathname)) {
            //geef de active class aan
            all[i].className = "button-active";
        }
    }
};