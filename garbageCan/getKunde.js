let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if(xhttp.readyState == 4 && xhttp.status == 200){
        console.log(this.responseText);
        document.getElementById('kundenTabelle').innerHTML = this.responseText
    }
}
xhttp.open('GET', 'getcustomer.php');
xhttp.send();

$(document).ready(function(){
    $('#Tabelle').DataTable();
} );


