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
$query = $this->db->query('SELECT nazwa, tekst FROM szablony WHERE nazwa IN("s1_style",
                          "s1_style1", "s1_p1" ,"s1_p2" ,"s1_p3" ,"s1_p4" ,"s1_p5" ,"s1_p6")'); 
foreach ($query->result() as $row)
{
    switch ($row->nazwa)
    {
        case "s1_style":
        {
            if ($_POST['stylesel'] == "0")
            {
                $s1_style = $row->tekst;
            }
            break;
        }
        case "s1_style1":
        {
            if ($_POST['stylesel'] == "1")
            {
                $s1_style = $row->tekst;
            }
            break;
        }
        case "s1_p1":
        {
            $p1 = $row->tekst;
            break;
        }
        case "s1_p2":
        {
            $p2 = $row->tekst;
            break;
        }
        case "s1_p3":
        {
            $p3 = $row->tekst;
            break;
        }
        case "s1_p4":
        {
            $p4 = $row->tekst;
            break;
        }
        case "s1_p5":
        {
            $p5 = $row->tekst;
            break;
        }
        case "s1_p6":
        {
            $p6 = $row->tekst;
            break;
        }
    }
}

if ($_POST['stylesel'] == "2")
{
    $query = $this->db->query('SELECT nazwa, tekst FROM szablony WHERE nazwa IN("s1s1", "s1s2", "s1s3" ,"s1s4" ,"s1s5" ,"s1s6", "s1s7")'); 

    foreach ($query->result() as $row)
    {
            switch ($row->nazwa)
            {
                case "s1s1":
                {
                    $s1s1 = $row->tekst;
                    break;
                }
                case "s1s2":
                {
                    $s1s2 = $row->tekst;
                    break;
                }
                case "s1s3":
                {
                    $s1s3 = $row->tekst;
                    break;
                }
                case "s1s4":
                {
                    $s1s4 = $row->tekst;
                    break;
                }
                case "s1s5":
                {
                    $s1s5 = $row->tekst;
                    break;
                }
                case "s1s6":
                {
                    $s1s6 = $row->tekst;
                    break;
                }
                case "s1s7":
                {
                    $s1s7 = $row->tekst;
                    break;
                }
            }
    }
    
    $s1_style = $s1s1 . $_POST['color_4'] . $s1s2 . $_POST['color_1'] . $s1s3 . $_POST['color_2'] . $s1s4 . $_POST['color_3'] . $s1s5 . $_POST['color_5'] . $s1s6 . $_POST['color_3'] . $s1s7;
}

$content = $p1 . $_POST['news'] . $p2 . $_POST['sections'] . $p3 . $_POST['staff'] . $p4 . $_POST['about'] . $p5 . $_POST['contact'] . $p6;
?>
<table>
    <tr>
        <th>
        Plik index.html
        </th>
        <th>
        Plik style.css
        </th>
    </tr>
    <tr>
        <td>
        <?php echo htmlspecialchars($content); ?>
        </td>
        <td>
        <?php echo htmlspecialchars($s1_style); ?>
        </td>
    </tr>
</table>
<?php ?>

<p><?php echo anchor('form', 'Spróbuj jeszcze raz!'); ?></p>

</body>
</html>