<?php
include("html_parts.php");



//require_once("html_intern_pageHeader.php");
html_intern_pageHeader();

echo"<main class='messageMain'>
      <div class='message-container'>
        <div class='message-box'>
          <h3>Mitarbeiter Login</h3>
          <form method='post' action='./dashboard.php' style='padding-bottom:10px'>
            <label for='fname'>Username:</label><br>
            <input type='text' id='fname' name='fname' placeholder=''><br>
            <label for='lname'>Passwort:</label><br>
            <input type='password' id='pwd' name='passwort' placeholder=''><br>
            <a style='font-size:60%' href='url'>Passwort vergessen</a><br><br>
            <input type='submit' value='Ok'>
          </form> 
        </div>
      </div>
    </main>";
//require_once("html_footer.php");
html_footer();
?>