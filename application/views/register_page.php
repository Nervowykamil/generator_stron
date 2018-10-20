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

<div class="c_filler">
	<div class="c_up">
	</div>
	<div class="c_down">
    <p style="color: #003399; text-align: center;">Rejestracja
    <BR> Wersja Codeignitera <?php echo CI_VERSION ?>
	</p>
    <?php echo validation_errors(); ?>

    <?php echo form_open('welcome/register'); ?>
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
            <input type="submit" value="Zarejestruj" />
            </td>
            <td>
            <a href="<?php echo site_url('/welcome/index')?>">
            Strona logowania.
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