<?

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$version = 1.2;

function fill_html($html, $values) {



    for ($x = 2; $x <= count($values) - 1; $x++) {
        $html = str_replace("#" . ($x - 1) . "#", $values[$x], $html);
    }

    for ($x = 2; $x <= 20; $x++) {
        $html = str_replace("#" . ($x - 1) . "#", "", $html);
    }

    return $html;
}

function decodetonumbers($val) {
    $val = strtolower($val);
    $val = str_replace("a", "0", $val);
    $val = str_replace("b", "1", $val);
    $val = str_replace("c", "2", $val);
    $val = str_replace("d", "3", $val);
    $val = str_replace("e", "4", $val);
    $val = str_replace("f", "5", $val);
    $val = str_replace("g", "6", $val);
    $val = str_replace("h", "7", $val);
    $val = str_replace("i", "8", $val);
    $val = str_replace("j", "9", $val);
    $val = str_replace("w", ".", $val);
    return $val;
}

//echo "a";
//  die;

$str = @$_GET["x"];
$htmlfile = "";
$msg_error = "";
$values = "";
//$basetemplate = file_get_contents('base_template/index.html');
if ($str == "") {
    $msg_error = "¡Hola!<br>Estaremos online próximamente.<br>Te esperamos.";
} else {
    $chunks = explode("x", strtolower($str));
    $folder = @$chunks[0];
    $rbkfile = @$chunks[1];
    if (isset($folder) && isset($rbkfile)) {
        $filename = 'repo/' . $folder . '/' . $rbkfile . ".html";
        if (file_exists($filename))
            $htmlfile = file_get_contents('repo/' . $folder . '/' . $rbkfile . ".html");
    }
    if ($htmlfile == "") {
        $msg_error = "Vaya, no sabemos generar la rúbrica que nos pides.<br>Contacta con el docente que te ha proporcionado el enlace.";
    } else {
        $values = array();
        $i = 0;

        foreach ($chunks as $chunk) {
            $values[$i] = decodetonumbers($chunk);
            $i++;
        }
//$i=1;
//foreach ($values as $value) {
        //  echo "#$i#:".$value."<br>";
        //$i++;
//}
    }
}
if ($msg_error == "")
    $htmlcontents = fill_html($htmlfile, $values);
require('basetemplate/index_basetemplate.php');
?>