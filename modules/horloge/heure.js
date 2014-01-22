function HeureCheckJS()
    {
    krucial = new Date;
    heure = krucial.getHours();
    min = krucial.getMinutes();
    sec = krucial.getSeconds();
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
    DinaHeure = heure0 + heure + ":" + min0 + min ;
    which = DinaHeure
    if (document.getElementById){
        document.getElementById("js_heure").innerHTML=which;
    }
    setTimeout("HeureCheckJS()", 1000)
    }
window.onload = HeureCheckJS;