// Les variables

var resultcdm = document.getElementsByClassName("resultcdm")[0];

var result = document.getElementsByClassName("result")[0];

var equipes = ["L'Allemagne", "L'Angleterre", "La Belgique", "La Croatie", "Le Danemark", "L'Espagne", "La France", "L'Islande", "La Pologne", "Le Portugal", "La Russie", "La Serbie", "La Suède", "La Suisse", "L'Egypte", "Le Maroc", "Le Nigeria", "Le Sénégal", "La Tunisie", "L'Argentine", "Le Brésil", "La Colombie", "L'Uruguay", "Le Perou", "L'Arabie Saoudite", "L'Australie", "La Corée du Sud", "L'Iran", "Le Japon", "Le Costa Rica", "Le Mexique", "Le Panama", "Le SC Amiens", "L'Olympique de Marseille", "Les Girondins de Bordeaux", "Le Stade Rennais", "Le SM Caen", "Le Toulouse FC", "Le Paris Saint Germain", "Le Dijon FCO", "L'OGC Nice", "Le Lille OSC", "L'AS Saint Etienne", "Le Nimes Olympique", "Le SCO Angers", "Le FC Nantes", "Le Stade de Reims", "L'EA Guingamp", "L'AS Monaco", "L'Olympique Lyonnais", "Le Montpellier HSC", "Le Racing Strasbourg", "Alaves", "L'Atletico", "Getafe", "L'Espanyol", "Villarreal", "Levante", "Le Betis", "Bilbao", "Le Rayo", "Valence", "Le Real", "Valladolid", "Eibar", "Leganes", "Huesca", "Girona", "Le Celta", "Seville", "Le Barça", "La Real Sociedad"];

var resultats = [" va gagner contre ", " va perdre contre ", " va faire match nul contre "];

var ballon1 = document.getElementsByClassName("ballon")[0];
var ballon2 = document.getElementsByClassName("ballon")[1];
var ballon3 = document.getElementsByClassName("ballon")[2];
var ballon4 = document.getElementsByClassName("ballon")[3];
var ballon5 = document.getElementsByClassName("ballon")[4];
var ballon6 = document.getElementsByClassName("ballon")[5];
var ballon7 = document.getElementsByClassName("ballon")[6];
var ballon8 = document.getElementsByClassName("ballon")[7];
var ballon9 = document.getElementsByClassName("ballon")[8];
var ballon10 = document.getElementsByClassName("ballon")[9];

// Les fonctions

// fonctions d'initialisation
function init() {
    document.getElementById("btncdm").addEventListener("click", clickCdm);
    document.getElementById("btnL1").addEventListener("click", clicL1);
    document.getElementById("btnLiga").addEventListener("click", clicLiga);

    // fonction qui permet de différencier les ballons L1 et les ballon Liga
    for (var i = 0; i < document.getElementsByClassName("ballon").length; i++) {

        if (i >= 0 && i < 5) {
            document.getElementsByClassName("ballon")[i].addEventListener('click', ballonL1);
        } else {
            document.getElementsByClassName("ballon")[i].addEventListener('click', ballonLiga);
        }
    }
}

function clickCdm() {

    var equipescdm = equipes.slice(0, 32);

    var equipescdm1 = equipescdm[Math.floor(Math.random() * equipescdm.length)];

    var results = resultats[Math.floor(Math.random() * resultats.length)];

    var equipescdm2 = equipescdm[Math.floor(Math.random() * equipescdm.length)];

    do {
        equipescdm2 = equipescdm[Math.floor(Math.random() * equipescdm.length)];
    }
    while (equipescdm1 === equipescdm2);

    resultcdm.innerHTML = equipescdm1 + results + equipescdm2;
}
// fonction qui permet de remplacer les logos par les ballons L1
function clicL1() {

    document.getElementById("choix").style.display = "none";
    document.getElementById("ballonsL1").style.display = "block";
    document.getElementById("resultat").style.display = "none";

}
// fonction Ligue 1
function ballonL1(value) {

    var nbpredictl1 = value.target.dataset.value;

    var equipesl1 = equipes.slice(32, 52);

    var predictl1 = "";

    for (var i = 0; i < nbpredictl1; i++) {

        var equipel1_1 = equipesl1[Math.floor(Math.random() * equipesl1.length)];

        var results = resultats[Math.floor(Math.random() * resultats.length)];

        var equipel1_2 = equipesl1[Math.floor(Math.random() * equipesl1.length)];

        do {
            equipel1_2 = equipesl1[Math.floor(Math.random() * equipesl1.length)];
        }
        while (equipel1_1 === equipel1_2);

        predictl1 += equipel1_1 + results + equipel1_2 + "<br>";
    }
    document.getElementById("resultat").style.display = "block";
    result.innerHTML = predictl1;
    document.getElementById("choix").style.display = "block";
    document.getElementById("ballonsL1").style.display = "none";
}
// fonction qui permet de remplacer les logos par les ballons Liga
function clicLiga() {

    document.getElementById("choix").style.display = "none";
    document.getElementById("ballonsLiga").style.display = "block";
    document.getElementById("resultat").style.display = "none";

}
// fonction Liga
function ballonLiga(value) {

    var nbpredictliga = value.target.dataset.value;

    var equipesliga = equipes.slice(52, 72);

    var predictliga = "";

    for (var i = 0; i < nbpredictliga; i++) {

        var equipeLiga_1 = equipesliga[Math.floor(Math.random() * equipesliga.length)];

        var results = resultats[Math.floor(Math.random() * resultats.length)];

        var equipeLiga_2 = equipesliga[Math.floor(Math.random() * equipesliga.length)];

        do {
            equipeLiga_2 = equipesliga[Math.floor(Math.random() * equipesliga.length)];
        }
        while (equipeLiga_1 === equipeLiga_2);

        predictliga += equipeLiga_1 + results + equipeLiga_2 + "<br>";
    }
    document.getElementById("resultat").style.display = "block";
    result.innerHTML = predictliga;
    document.getElementById("choix").style.display = "block";
    document.getElementById("ballonsLiga").style.display = "none";
}

window.onload = init;
