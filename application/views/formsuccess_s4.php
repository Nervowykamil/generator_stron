<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Tworzenie strony</title>
    <link rel="stylesheet" type="text/css" href="/css/formsuccess.css">
</head>
<body>

<h2>Strona została wygenerowana.</h2>
<h3>Aby korzystać ze strony należy utworzyć pliki o nazwach i rozszerzeniach zgodnych z nagłówkami w tabeli 
<br> a następnie wypełnić je treścią zawartą w tabeli odpowiednio pod nagłówkami.</h3>
<h2><br> Ważne !</h2>
<h3><br> Podczas tworzenia plików należy ustawić ich kodowanie na UTF-8.
<br> Najłatwiej jest to zrobić w programie notepad++.
<br> Można to zrobic też w notatniku podczas operacji "zapisz jako".</h3>

<?php
$query = $this->db->query('SELECT nazwa, tekst FROM szablony WHERE nazwa IN("s4_style", "s4_style1", "s4_1" ,"s4_2" ,"s4_3" ,"s4_4" ,"s4_5", "s4_index")'); 
foreach ($query->result() as $row)
{
    switch ($row->nazwa)
    {
        case "s4_index":
        {
            $index = $row->tekst;
            break;
        }
        case "s4_style":
        {
            if ($_POST['stylesel'] == "0")
                $style = $row->tekst;
            break;
        }
        case "s4_style1":
        {
            if ($_POST['stylesel'] == "1")
                $style = $row->tekst;
            break;
        }
        case "s4_1":
        {
            $p1 = $row->tekst;
            break;
        }
        case "s4_2":
        {
            $p2 = $row->tekst;
            break;
        }
        case "s4_3":
        {
            $p3 = $row->tekst;
            break;
        }
        case "s4_4":
        {
            $p4 = $row->tekst;
            break;
        }
        case "s4_5":
        {
            $p5 = $row->tekst;
            break;
        }
    }
}
$f1 = $p1 . $_POST['news'];
$f2 = $p2 . $_POST['sections'];
$f3 = $p3 . $_POST['staff'];
$f4 = $p4 . $_POST['about'];
$f5 = $p5 . $_POST['contact'];

if ($_POST['stylesel'] == "2")
{
    $query = $this->db->query('SELECT nazwa, tekst FROM szablony WHERE nazwa IN("s4s1", "s4s2", "s4s3" ,"s4s4" ,"s4s5" ,"s4s6", "s4s7", "s4s8", "s4s9")'); 

    foreach ($query->result() as $row)
    {
            switch ($row->nazwa)
            {
                case "s4s1":
                {
                    $s1s1 = $row->tekst;
                    break;
                }
                case "s4s2":
                {
                    $s1s2 = $row->tekst;
                    break;
                }
                case "s4s3":
                {
                    $s1s3 = $row->tekst;
                    break;
                }
                case "s4s4":
                {
                    $s1s4 = $row->tekst;
                    break;
                }
                case "s4s5":
                {
                    $s1s5 = $row->tekst;
                    break;
                }
                case "s4s6":
                {
                    $s1s6 = $row->tekst;
                    break;
                }
                case "s4s7":
                {
                    $s1s7 = $row->tekst;
                    break;
                }
                case "s4s8":
                {
                    $s1s8 = $row->tekst;
                    break;
                }
                case "s4s9":
                {
                    $s1s9 = $row->tekst;
                    break;
                }
            }
    }
    
    $style = $s1s1 . $_POST['color_4'] . $s1s2 . $_POST['color_1'] . $s1s3 . $_POST['color_2'] . $s1s4 . $_POST['color_3'] . $s1s5 . $_POST['color_5'] . $s1s6 . $_POST['color_3'] . $s1s7 . $_POST['color_1'] . $s1s8 . $_POST['color_2'] . $s1s9;
}
?>
<table>
    <tr>
        <th>
        Plik index.php
        </th>
        <th>
        Plik style.css
        </th>
        <th>
        Plik 1.html
        </th>
    </tr>
    <tr>
        <td>
        <?php echo htmlspecialchars($index); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($style); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($f1); ?>
        </td>
    </tr>
    <tr>
        <th>
        Plik 2.html
        </th>
        <th>
        Plik 3.html
        </th>
        <th>
        Plik 4.html
        </th>
        <th>
        Plik 5.html
        </th>
    </tr>
    <tr>
        <td>
        <?php echo htmlspecialchars($f2); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($f3); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($f4); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($f5); ?>
        </td>
    </tr>
</table>
<?php ?>

<p><?php echo anchor('form', 'Spróbuj jeszcze raz!'); ?></p>

</body>
</html>