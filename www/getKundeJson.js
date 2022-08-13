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
                {"data":"adresse"}, 
            ]
        });
            // $('#kundenTabelle').DataTable({
            //         "data":data,
            //         "columns":[
            //         {"data":"id"},
            //         {"data":"vorname"},
            //         {"data":"nachname"},
            //         {"data":"geschlecht"},
            //         {"data":"gbdatum"},
            //         {"data":"art"},
            //         {"data":"adresse"}, 
            //     ]
            // });
        }
    };