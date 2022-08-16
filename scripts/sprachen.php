<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//Übersetzer Sprachen
function get_all_ub_sprachen(){

}

// Dolmetscher Sprachen
function get_all_dol_sprachen(){

}

//Mutter scprachen
function get_all_mt_sprachen(){

}

function get_all_sprachen($conn){
    // require_once("/var/www/html/swe2_2022team17/private/dbconnection.inc.php");
    // $conn = new mysqli($host, $user, $password, $database);
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "select id, sprache from itc_sprachen";
    $result=mysqli_query($conn, $sql);
    $string = "";
    while($row = mysqli_fetch_assoc($result)) {
        $con=true;
        $eins;
        $zwei;
        foreach($row as $item){
            if ($con){
                $eins = $item;
                $con=false;
            }
            else{
                $zwei = $item;
            }
        }
        $con=true;
        $string .= "<option value=\" $eins \"> $zwei </option>";
        //echo "<option value=\" $eins \"> $zwei </option>";
        //$data[] = $row;
    };
    return "$string";
    //echo "</select><br>";
    //echo $row;

    // if (isset($data)){
    //     $json = json_encode($data);
    //     //echo $json; 
    // } else{
    //     $json = null;
    //     echo "keine Einträge";
    // }
}




//html_pageHeader();
//get_all_sprachen();
//html_footer();

?>