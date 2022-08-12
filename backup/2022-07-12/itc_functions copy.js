
// var anfrage_form = document.getElementById("itc_tr_such_form_id");

// if (anfrage_form){
//     anfrage_form.addEventListener("submit", anfrage_antwort);
// }


function anfrage_antwort(e) {
    var form = document.forms["itc_tr_such_form_id"];
    var name_id = form["name_id"].value;
    var email_id = form["email_id"].value;
    var art_id = form["art_id"].value;
    var doku_id = form["doku_id"].value;
    var von_sprache_id = form["von_sprache_id"].value;
    var zu_sprache_id = form["zu_sprache_id"].value;
    var query = `name=${name_id}&doku_id=${doku_id}&email_id=${email_id}&art_id=${art_id}&von_sprache_id=${von_sprache_id}&zu_sprache_id=${zu_sprache_id}`;

    // const data = form.serialize
    //var dadsasd = form["name_id"].value;
    var d1 = document.querySelectorAll("itc_tr_such_form_id");
    var namen = document.getElementById("name_id").value;
    var xhr = new XMLHttpRequest()

    xhr.onload=function(){
        //let antwort = xhr.respondeText;
        //db_loader.innerHTML= this.responseText;
        var ergebnis = document.getElementById("itc_such_ergebnis");
        ergebnis.innerHTML= "Antwort =>  ";
        // ergebnis.innerHTML= this.responseText;
        ergebnis.append(this.responseText);
        // ergebnis.append(this.responseText);
        //ergebnis.append(form["6_id"].value);
    }

    xhr.open("GET", 'uebersetzer_anf.php?' + query, true);
    xhr.send();
    //xhr.open("GET", "hello.php?q=hi");
    
    
    // e.preventDefault(); // prevent actual form submit
}


// // jQuery ajax form submit example, runs when form is submitted
// document.getElementById("itc_tr_such_form_id").addEventListener ("submit", function(e) {
//     alert("Hello! I am an alert box!!");
//     e.preventDefault(); // prevent actual form submit
//     var form = $(this);
//     var url = form.attr('action'); //get submit url [replace url here if desired]
//     $.ajax({
//          type: "POST",
//          url: url,
//          data: form.serialize(), // serializes form input
//          success: function(data){
//              console.log(data);
//          }
//     });
// });
