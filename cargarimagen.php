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
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
     <div class="container kv-main">
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
                </div>
                
                <div>
                    
                </div>
            </form>
            
        </div>
                
<?php
  require('footer.php');
?>

    </html>

