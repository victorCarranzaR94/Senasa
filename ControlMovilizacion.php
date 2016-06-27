<?php
require('headerAdmin.php');
session_start();
?>

<!DOCTYPE html>
    <html lang="es">

    <head>
        <link rel="stylesheet" href="css/controlM.css" />
    </head>

<body>
 <div class="divBody">
   
    <div class="divB1">
        
         <form id="form" method="post" enctype="multipart/form-data">
            <h2> Control de Movilizacion de animales</h2><br/>
                <div class="b1In">
                    <input class="dato" type="text" name="cantFincas">
                    <input class="dato" type="text" name="guiasOficiales">
                    <input class="dato" type="text" name="copiasGuiasR"> 
                    <input class="dato" type="text" name="guiasDB">
                    <input class="dato" type="text" name="procesosDB">
                    <input class="dato" type="text" name="cantFincas">
                </div>
                <div class="b1text">
                
                <label class="label" >N° Finca de bovinos inscritos</label><br/>
                <label class="label">N° guias oficiales entregadas</label><br/>
                <label class="label">N° guias recibidas</label><br/>
                <label class="label">N° guias procesadas </label><br/>
                <label class="label">N° procesos en base de datos</label><br/>
                <label class="label">N° guias entregadas a oficiales</label><br/><br/>
                    <button type="submit" value="guardarCM " class="btnReg">Guardar</button>
               </div>
            
            
        </form>
        
    </div>
    <div class="divB2">
         
         <form id="form2" method="post" enctype="multipart/form-data">
         <h2> Capacitacion impartida</h2><br/><br/>
          <div class="b2In">
                    <input class="dato" type="text" name="cantFincas">
                    <input class="dato" type="text" name="guiasOficiales">
                    <input class="dato" type="date" name="copiasGuiasR"> 
                    <input class="dato" type="text" name="guiasDB">
                    <input class="dato" type="text" name="procesosDB">
                    
                </div>
                <div class="b2text">
                
                <label class="label" >Evento</label><br/><br/>
                <label class="label">Numero de eventos</label><br/><br/>
                <label class="label">Fecha</label><br/><br/>
                <label class="label">Numero de participaciones</label><br/><br>
                <label class="label">Lugar</label><br/><br>
                <br/><br/>
                 <button type="submit" value="guardarCI " class="btnReg">Guardar</button>
               </div>
        </form>
    </div>
    <div class="divB3">
        
         <form id="form3" method="post" enctype="multipart/form-data">
         <h2> Capacitacion Recibida</h2><br/><br/>
          <div class="b2In">
                    <input class="dato" type="date" name="cantFincas">
                    <input class="dato" type="text" name="guiasOficiales">
                    <input class="dato" type="text" name="copiasGuiasR"> 
                    <input class="dato" type="text" name="guiasDB">
                    <input class="dato" type="text" name="procesosDB">
                </div>
                
                <div class="b2text">
                
                <label class="label" >Fecha</label><br/><br/>
                <label class="label">Tipo evento</label><br/><br/>
                <label class="label">Tema</label><br/><br/>
                <label class="label">Lugar</label><br/><br>
                <label class="label">Numero participantes</label><br/><br>
                <br/><br/>
                 <button type="submit" value="guardarCR " class="btnReg">Guardar</button>
               </div>
        </form>
    </div>
 </div>
     
    <section> <?php  require('footer.php'); ?> </section>
</body>


</html>