var xhttp = new XMLHttpRequest();

xhttp.open("GET", "getcustomer.php", true);
//xhttp.open("GET", "getAnfragen.php", true);
xhttp.send();
xhttp.onreadystatechange = function() {
    if(xhttp.readyState == 4 && xhttp.status == 200){ 
        var data = JSON.parse(xhttp.responseText);
        console.log(data);
        console.log(xhttp.responseText);
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
};
// xhttp.open("GET", "getAnfragen.php", true);
// xhttp.send();
// xhttp.onreadystatechange = function() {
//     if(xhttp.readyState == 4 && xhttp.status == 200){ 
//         var data = JSON.parse(xhttp.responseText);
        
//         $('#anfragen').DataTable({
//             "data":data,
//             "columns":[
//             {"data":"id"},
//             {"data":"kunden_id"},
//             {"data":"aufklaerung"},
//             {"data":"namen_aufklaerung"},
//             ]
//         });
//     }
// };
