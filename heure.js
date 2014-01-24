function HeureCheckJS()
    {
        horaire = new Date;
        tab_mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        tab_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

        mois = horaire.getMonth();
        jourM = horaire.getDate();
        jourS = horaire.getDay();

        heure = horaire.getHours();
        min = horaire.getMinutes();
        sec = horaire.getSeconds();
        if (sec < 10)
            sec0 = "0";
        else
            sec0 = "";
        if (min < 10)
            min0 = "0";
        else
            min0 = "";
        if (heure < 10)
            heure0 = "0";
        else
            heure0 = "";
        DinaJour = tab_jour[jourS]+" "+ jourM+" "+ tab_mois[mois] ;
        DinaHeure = heure0 + heure + ":" + min0 + min ;

        if (document.getElementById){
            document.getElementById("js_heure").innerHTML=DinaHeure;
        }
        setTimeout("HeureCheckJS()", 1000)

        if (document.getElementById){
            document.getElementById("js_date").innerHTML=DinaJour;
        }
    }
window.onload = HeureCheckJS;