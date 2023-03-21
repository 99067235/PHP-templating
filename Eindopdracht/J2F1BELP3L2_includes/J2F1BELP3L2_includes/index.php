<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include 'includes/header.php';
    include 'includes/footer.php';
    set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context)
    {
        throw new ErrorException( $err_msg, 0, $err_severity, $err_file, $err_line );
    }, E_WARNING);
    
    try{
      if ($_GET != null && $_GET != ""){
        include("pages/".$_GET['page']);
      }
    }
    catch(Exception $e)
    {
      echo '<img src="images/404.png">';
    }
    restore_error_handler();
  ?>
	<!-- laad hier via php je header in (vanuit je includes map) -->


	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->

	
	<!-- laad hier via php je footer in (vanuit je includes map)-->

</body>
</html>