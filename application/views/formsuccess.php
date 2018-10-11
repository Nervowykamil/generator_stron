<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Tworzenie strony</title>
</head>
<body>
<?php 
switch ($_POST['select'])
{
    default:
    case 1:
    $this->load->view('formsuccess_s1'); 
    break;
    case 2:
    $this->load->view('formsuccess_s2'); 
    break;
    case 3:
    $this->load->view('formsuccess_s3'); 
    break;
    case 4:
    $this->load->view('formsuccess_s4'); 
    break;
}
?>
</body>
</html>