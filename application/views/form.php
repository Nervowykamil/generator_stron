<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Generowanie strony</title>
      <link rel="stylesheet" type="text/css" href="/css/form_page.css">
      <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
      <script language="javascript" type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
      <script type="text/javascript"> tinyMCE.init({
         // General options
         theme: 'modern',
         mode : "textareas",
         language : "pl",
         menubar: "",
         fontsize_formats: "8pt 10pt 11pt 12pt 14pt 18pt 24pt 36pt",
         toolbar1: "styleselect, fontselect",
         toolbar2: " fontsizeselect",
         statusbar: false,
         branding: false,
         toolbar_items_size : 'small',
         height: 150,
         }); </script>
</head>

<body>
<div style="position: relative; width:100%; text-align: center">

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
<?php
    echo 'Zalogowano jako: '.$this->session->userdata('login');
    echo '<br>'. '<a href="'.site_url('welcome/logout').'">Wyloguj</a>';
?>
<h1> Uzupełnij treść poszczególnych sekcji:</h1>
<table id="first_table">
    <tr>
        <td>
            <h3>Aktualności</h3>
            <textarea id="mytextarea" name="news" rows="10" cols="30"></textarea>
        </td>
        <td>
            <h3>Sekcje</h3>
            <textarea id="mytextarea" name="sections" rows="10" cols="30"></textarea>
        </td>
        <td>
            <h3>Kadra</h3>
            <textarea id="mytextarea" name="staff" rows="10" cols="30"></textarea>
        </td>
        <td>
            <h3>O nas</h3>
            <textarea id="mytextarea" name="about" rows="10" cols="30"></textarea>
        </td>
        <td>
            <h3>Kontakt</h3>
            <textarea id="mytextarea" name="contact" rows="10" cols="30"></textarea>
        </td>
    </tr>
</table>
<h1> Wybierz szablon:</h1>
<table class="second_table">
  <tr>
      <td>
      <input type="radio" name="select" value="1" checked> Szablon pierwszy
      </td>
      <td>
      <input type="radio" name="select" value="2"> Szablon drugi
      </td>
      <td>
      <input type="radio" name="select" value="3"> Szablon trzeci
      </td>
      <td>
      <input type="radio" name="select" value="4"> Szablon czwarty
      </td>
  </tr> <tr>
      <td>
      <img src="../img/mini/1_1.jpg">
      </td>
      <td>
      <img src="../img/mini/s2.jpg">
      </td>
      <td>
      <img src="../img/mini/s3.jpg">
      </td>
      <td>
      <img src="../img/mini/s4.jpg">
      </td>
  </tr>
</table>
  <br>
  <h1>Wybierz styl:</h1>
<table class="second_table">
  <tr>
      <td>
      <input type="radio" name="stylesel" value="0" checked> Styl pierwszy
      </td>
      <td>
      <input type="radio" name="stylesel" value="1"> Styl drugi
      </td>
      <td>
      <input type="radio" name="stylesel" value="2"> Własny styl(użyj kolorów w standardzie html)
      </td>
  <tr>
  <tr>
      <td>
      <img src="../img/mini/1_1.jpg">
      </td>
      <td>
      <img src="../img/mini/1_2.jpg">
      </td>
      <td>
      <br>
            <table>
                <tr>
                    <td>Kolor menu tła:</td>
                    <td><input type="text" name="color_1"></td>
                </tr>
                <tr>
                    <td>Kolor przycisków menu:</td>
                    <td><input type="text" name="color_2"></td>
                </tr>
                <tr>
                    <td>Kolor tekstu:</td>
                    <td><input type="text" name="color_3"></td>
                </tr>
                <tr>
                    <td>Pasywny kolor tła:</td>
                    <td><input type="text" name="color_4"></td>
                </tr>
                <tr>
                    <td>Aktywny kolor tła:</td>
                    <td><input type="text" name="color_5"></td>
                </tr>
            </table>
      </td>
  <tr>
</table>
  
<div><input type="submit" value="Generuj" />
<?php echo form_close(); ?>
</div>
</body>
</html>
