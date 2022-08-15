"use strict";

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "getcustomer.php", true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if(xhttp.readyState == 4 && xhttp.status == 200){ 
            var data = JSON.parse(xhttp.responseText);
            //console.log(data);
            $('#kundenTabelle').DataTable({
                    "data":data,
                    "columns":[
                    {"data":"id"},
                    {"data":"vorname"},
                    {"data":"nachname"},
                    {"data":"geschlecht"},
                    {"data":"gbdatum"},
                    {"data":"art"},
                    {"data":"strasse"}, 
                    {"data":"hausnr"},
                    {"data":"plz"},
                    {"data":"ort"}
                    ]
                });

        }

    }
        // var data = JSON.parse(xhttp.responseText);
        // console.log(data);
        // console.log(xhttp.responseText);
        // $('#kundenTabelle').DataTable({
        //     "data":data,
        //     "columns":[
        //     {"data":"id"},
        //     {"data":"vorname"},
        //     {"data":"nachname"},
        //     {"data":"geschlecht"},
        //     {"data":"gbdatum"},
        //     {"data":"art"},
        //     {"data":"strasse"}, 
        //     {"data":"hausnr"},
        //     {"data":"plz"},
        //     {"data":"ort"}
        //     ]
        // });
    
var xhttp2 = new XMLHttpRequest();
xhttp2.open("GET", "getUeAnfragen.php", true);
xhttp2.send();
xhttp2.onreadystatechange = function() {
    if(xhttp2.readyState == 4 && xhttp2.status == 200){ 
        var data = JSON.parse(xhttp2.responseText);
        //console.log(data);
        //console.log(xhttp.responseText);
        $('#ue_anfragen').DataTable({
            "data":data,
            "columns":[
            {"data":"id"},
            {"data":"kunden_id"},
            {"data":"dokument_titel"},
            {"data":"namen_aufklaerung"},
            {"data":"vonSprache"},
            {"data":"zuSprache"}
            ]
        });
    }
};
var xhttp3 = new XMLHttpRequest();
xhttp3.open("GET", "getDolAnfragen.php", true);
xhttp3.send();
xhttp3.onreadystatechange = function() {
    if(xhttp3.readyState == 4 && xhttp3.status == 200){ 
        var data = JSON.parse(xhttp3.responseText);
        console.log(data);
        console.log(xhttp.responseText);
        $('#do_anfragen').DataTable({
            "data":data,
            "columns":[
            {"data":"id"},
            {"data":"kunden_id"},
            {"data":"beschreibung"},
            {"data":"datum_time_start"},
            {"data":"datum_time_end"},
            {"data":"ort"},
            {"data":"vonSprache"},
            {"data":"zuSprache"}
            ]
        });
    }
};