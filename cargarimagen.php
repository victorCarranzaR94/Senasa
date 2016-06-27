<?php
require('headerAdmin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>


<title>Agregar imagen</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/fileinput.js" type="text/javascript"></script>
         <link rel="stylesheet" href="css/principal.css">
         <link rel="stylesheet" href="css/profile.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
     <section id="home" class="medium">
        
    </section>
    
     <div class="container kv-main">
           <div id="titleProfile">Insertar Imagen</div>
           <div>
               <form>
               <label for="codigo" id="codigo">Codigo de Hoja de Visita: </label>
               <input name="codigo" type="text" required >
               <p><input type="submit" value="Buscar" class="btnReg"> &nbsp; &nbsp;</p>
               </form>    
           </div>
                
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
                </div>
                <p><input type="submit" value="Guardar" class="btnReg"> &nbsp; &nbsp;</p>
            </form>
            
        </div>
                
<?php
  require('footer.php');
?>

    </html>

