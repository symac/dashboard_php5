const SLIDE = 30;

var seconds = SLIDE ;                   
document.compteur.temps.value= SLIDE +' s';
                 
function Timer(){
    seconds -=1;
    document.compteur.temps.value = seconds +' s';
    if(seconds <0){
        seconds = slide;
        document.compteur.temps.value = SLIDE  +' s';
        setTimeout("Timer()",1000);
    }
    else{
        setTimeout("Timer()",1000);
    }
}