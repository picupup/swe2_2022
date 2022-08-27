function anfrage_antwort(e) {
    var form = document.forms["itc_tr_such_form_id"];
    var nn_id = form["nn_id"].value;
    var vn_id = form["vn_id"].value;
    var gb_id = form["gb_id"].value;
    var ge_id = form["ge_id"].value;
    var person_art_id = form["person_art_id"].value;
    var st_id = form["st_id"].value;
    var hausnr_id = form["hausnr_id"].value;
    var plz_id = form["plz_id"].value;
    var ort_id = form["ort_id"].value;
    
    var email_id = form["email_id"].value;

    var dock_art_id = form["dock_art_id"].value;
    var doku_id = form["doku_id"].value;
    var von_sprache_id = form["von_sprache_id"].value;
    var zu_sprache_id = form["zu_sprache_id"].value;
    var query = `nn_id=${nn_id}&vn_id=${vn_id}&gb_id=${gb_id}&ge_id=${ge_id}&person_art_id=${person_art_id}&st_id=${st_id}&hausnr_id=${hausnr_id}&plz_id=${plz_id}&ort_id=${ort_id}&doku_id=${doku_id}&email_id=${email_id}&dock_art_id=${dock_art_id}&von_sprache_id=${von_sprache_id}&zu_sprache_id=${zu_sprache_id}`;

    // var d1 = document.querySelectorAll("itc_tr_such_form_id");
    // var namen = document.getElementById("nn_id").value;
    var xhr = new XMLHttpRequest()

    xhr.onload=function(){
        var ergebnis = document.getElementById("itc_such_ergebnis");
        ergebnis.innerHTML= "Antwort =>  ";
        ergebnis.append(this.responseText);
    }

    xhr.open("GET", 'uebersetzer_anf.php?' + query, true);
    xhr.send();
}