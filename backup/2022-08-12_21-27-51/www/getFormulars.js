function load(doc) {
    let req = new XMLHttpRequest();
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
            document.getElementById("variabler_body").innerHTML = (req.responseText);
        }
    }
    req.open("GET", doc )
    req.send();
    }
function execUebersetzungAnfrage(){
    load("anfrageformular_Ue.html");
    }
function execDolmetscherAnfrage(){
    load("anfrageformular_Dol.html");
    }
    
