
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("html_parts.php");
include("scripts/sprachen.php");

html_pageHeader();

echo"<h1> Übersetzer anlegen </h1>
<form //method=\"post\" oder action=\"link\">
    <label> Vorname </label> 
    <input id=\"v_name\" value=\"\" type=\"text\" name=\"v_name\" required> <br>
    <label> Nachname </label>
    <input id=\"n_name\" value=\"\" type=\"text\" name=\"n_name\" required> <br>
    <label> E-Mail </label>
    <input id=\"email\" value=\"\" type=\"text\" name=\"email\" required> <br>
    <label> Telefonnummer </label>
    <input id=\"email\" value=\"\" type=\"numbers\" name=\"phone\"> <br> 
    <label> Sprache </label>
    <input id=\"email\" value=\"\" type=\"text\" name=\"phone\" required> <br>
    <label> Zeilenpreis </label>
    <input id=\"email\" value=\"\" type=\"text\" name=\"phone\" name=\"price/line\"> <Section>
        <p>
        <label for='dol_lable_id'>Dolmetscher Sprachen</label></p>
        <select size='15' name='geschlecht' id='dol_select_id' defaultValue='null' multiple> ";
         get_all_sprachen() ;
         echo " </select>
        </Section>
    <br>
    
    <button id='email' type='submit'> Übersetzer anlegen </button>
</form>";

html_footer();

// <Section>
//         <p><label for='ub_lable_id'>Übersetzer Sprachen</label></p>
//         <select size='15' name='geschlecht' id=\"ub_select_id\" defaultValue='null' multiple>
//             <option disabled selected value> -- select an option -- </option>
//         </select><br>
//     </Section>
//     <br>
//     <Section>
//         <p><label for='mt_lable_id'>Mutter Sprache</label></p>
//         <select size='15' name='geschlecht' id='mt_select_id' defaultValue='null'>
//             <option disabled selected value> -- select an option -- </option>
//         </select><br>
//     </Section>
?>

