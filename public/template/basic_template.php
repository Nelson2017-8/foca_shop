<?php
/*
template basico de HTML-View de Bootstrad, Jquery. Require de una variable llamada $content y el path (ubicacion), el contenido de la pagina.
Tambien recibe parametros opcionales como ($title, $description, $author, $keywords) los cuales deben ser del tipo string,
para incluir hojas de estilos y archivo js, cree un array con el nombre $link y $script, que llevan como unico valor el link
del archivo
 */

if (!isset($path)) {
    function crearPath()
    {
        $u    = $_SERVER["REQUEST_URI"];
        $path = null;
        if ($u !== "/") {
            $u = trim($u, "/");
            $u = '/' . $u . '/';
            $n = mb_substr_count($u, '/');
            for ($i = 1; $i < $n; $i++) {
                $path .= "../";
            }
        } else {
            $path = "./";
        }
        return $path;
    }
    $path = crearPath();
}
$lib = $GLOBALS['lib'];

if (!isset($title)) {
    $title = title;
}

if (!isset($description)) {
    $description = description;
}

if (!isset($author)) {
    $author = author;
}
if (!isset($keywords)) {
    $keywords = keywords;
}
if (!isset($lang)) {
    $lang = lang;
}

function searchLib($listName, $type)
{
    $lib  = $GLOBALS['lib'];
    $path = crearPath();
    foreach ($listName as $i) {
        if (isset($lib[$i])) {
            if (is_string($lib[$i])) {
                if ($type == "css") {
                    echo '<link rel="stylesheet" href="' . $path . $lib[$i] . '">';
                } else {
                    echo '<script type="text/javascript" src="' . $path . $lib[$i] . '"></script>';
                }
            }
            if (is_array($lib[$i])) {
                if ($type == "css") {
                    echo '<link rel="stylesheet" href="' . $path . $lib[$i]["css"] . '">';
                } else {
                    echo '<script type="text/javascript" src="' . $path . $lib[$i]['js'] . '"></script>';
                }
            }
        }
    }
    return true;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <!-- Le styles -->
    <link rel="shortcut icon" href="<?php echo $path . favicon; ?>">
    <link href="<?php echo $path . $lib["bootstrap"]["css"]; ?>" rel="stylesheet">
    <?php if (isset($include_lib_css)) {searchLib($include_lib_css, "css");}?>

    <?php if (isset($link)): ?>
        <?php foreach ($link as $href): ?>

    <link href="<?php echo $path . $href; ?>" rel="stylesheet">

        <?php endforeach?>
    <?php endif?>



    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>

  <body>

<?php include_once $content;?>

    <script type="text/javascript" src="<?php echo $path . $lib["jquery"]; ?>"></script>
    <script type="text/javascript" src="<?php echo $path . $lib["popper"] ?>"></script>
    <script type="text/javascript" src="<?php echo $path . $lib["bootstrap"]["js"]; ?>"></script>
    <?php if (isset($include_lib_js)) {searchLib($include_lib_js, "js");}?>

    <?php if (isset($script)): ?>
        <?php foreach ($script as $src): ?>

    <script type="text/javascript" src="<?php echo $path . $src; ?>"></script>

        <?php endforeach?>
    <?php endif?>

  </body>
</html>
