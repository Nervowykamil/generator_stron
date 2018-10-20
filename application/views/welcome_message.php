<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html LANG=PL>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Generator</title>
      <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<!-- środkowy -->
<div class="c_filler">
	<!-- śr górny -->
	<div class="c_up">
		<a href="/index.php/generator">
		<div class="btn">
		</div>
		</a>
	</div>
	<!-- śr dolny -->
	<div class="c_down">
	<p style="color: #003399; text-align: center;">Witaj w generatorze stron internetowych dla uczelnianych klubów sportowych.
	<BR> Strona generuje kod źródłowy stron i podstron oraz arkusze stylów.
	<BR> Aby przejść do generownaia stron zaloguj się lub zarejestruj.
    <BR> Wersja Codeignitera <?php echo CI_VERSION ?>
	</p>
    <?php echo validation_errors(); ?>

    <?php echo form_open('welcome/login'); ?>
    <table align="center">
        <tr>
            <td>
            Login:
            </td>
            <td>
            <input name="login" type="text">
            </td>           
        </tr>
        <tr>
            <td>
            Hasło:
            </td>
            <td>
            <input name="password" type="password">
            </td>

        </tr>
        <tr>
            <td>
            <input type="submit" value="Zaloguj" />
            </td>
            <td>
            &nbsp
            <a href="<?php echo site_url('/welcome/register_page')?>">
            Rejestracja
            </a>
            </td>

        </tr>
        <tr>
            <td colspan="2">
            <?php 
            if(isset($_POST['message']))
            {
                echo $_POST['message']; 
            }
            ?>
            </td>
        </tr>
    </table>
	</div>
</div>


</body>
</html>