<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

</head>

<body>
    <nav class="">
        <div class="container menu-fixed">
            <div class="">
                       
                <div class="navbar-header">
                    
                     <a title="" target="_blank" href="#"><img height="80px" src="img/123.png" /></a>

                </div>
              
                <div class="padding-top" id="">
                    <ul class="nav navbar-nav navbar-right">
                       <?php
                        if(isset($_SESSION['tipoUsuario'])){
                        switch($_SESSION['tipoUsuario']){
                            case "estandar":
                                echo "<ul id='menu'>
                                      
                                      <li><a class='' href='#'>Información</a>
                                      <ul>
                                      <li><a class='' href='cargarimagen.php'>Introducir Imagenes</a></li>
                                      <li><a class='' href='#'>Ingresar Hoja de Visita </a>
                                      <ul>
                                      <li><a class='' href='controlEnfermedades.php'>Prevencion y control de Enfermedades</a></li>
                                      <li><a class='' href='#'>Visita de fiscalizacion e inspeccion</a></li>
                                      <li><a class='' href='#'>Certificado veterinario de operacion y denuncias sanitarias</a></li>
                                      <li><a class='' href='#'>Operativos Sanitarios</a></li>
                                      <li><a class='' href='#'>Atencion de Exportacion e Importacion</a></li>
                                      <li><a class='' href='ControlMovilizacion.php'>Rastreabilidad y control de movilizacion de animales</a></li>
                                      <li><a class='' href='#'>Capacitacion impartida</a></li>
                                      <li><a class='' href='#'>Capacitacion recibida</a></li>
                                      <li><a class='' href='reunions.php'>Participacion en reuniones</a></li>
                                      </ul></li>
                                      <li><a class='' href='ordenSanitaria.php'>Abrir Registro de Orden Sanitaria</a></li> 
                                      </ul></li>
                                      
                                      <li><a class='' href='reporteUser.php'>Consultas y Reportes</a>
                                      <ul>
                                      <li><a class='' href='#'>Consulta General por Periodo</a></li>
                                      <li><a class='' href='#'>Generar Reporte</a></li>
                                      </ul></li>
                                      
                                      <li><a class='' href='#'>Calendario de Actividades</a>
                                      <ul>
                                      <li><a class='' href='#'>Ver Actividades Pendientes</a></li> 
                                      </ul></li>
                                      
                                      <li><a class='' href='index.php'>Cerrar Session</a></li>
                                      </ul>";
                            break;
                            case "administrador":
                                echo "<ul id='menu'>
                                      
                                      <li><a class='' href='#'>Información ▼</a>
                                      <ul>
                                      <li><a class='' href='cargarimagen.php'>Introducir Imagenes</a></li>
                                      <li><a class='' href='#'>Ingresar Hoja de Visita ►</a>
                                      <ul>
                                      <li><a class='' href='controlEnfermedades.php'>Prevencion y control de Enfermedades</a></li>
                                      <li><a class='' href='#'>Visita de fiscalizacion e inspeccion</a></li>
                                      <li><a class='' href='#'>Certificado veterinario de operacion y denuncias sanitarias</a></li>
                                      <li><a class='' href='#'>Operativos Sanitarios</a></li>
                                      <li><a class='' href='#'>Atencion de Exportacion e Importacion</a></li>
                                      <li><a class='' href='ControlMovilizacion.php'>Rastreabilidad y control de movilizacion de animales</a></li>
                                      <li><a class='' href='#'>Capacitacion impartida</a></li>
                                      <li><a class='' href='#'>Capacitacion recibida</a></li>
                                      <li><a class='' href='reunions.php'>Participacion en reuniones</a></li>
                                      </ul></li>
                                      <li><a class='' href='ordenSanitaria.php'>Abrir Registro de Orden Sanitaria</a></li> 
                                      </ul></li>
                                      
                                      <li><a class='' href='#'>Consultas y Reportes ▼</a>
                                       <ul>
                                       
                                      <li><a class='' href='#'>Consultas y Reportes por Persona ►</a><ul>
                                      <li><a class='' href=''>Consultar por Fecha y Codigo de Usuario</a></li>
                                      <li><a class='' href='reporteUser.php'>Generar Graficos Generales</a></li>
                                      
                                      </ul></li>
                                      
                                      <li><a class='' href='#'>Consulta por Periodo de Tiempo y Categoria ►</a>
                                      <ul>
                                      <li><a class='' href='#'>Consulta General por Periodo</a></li>
                                      <li><a class='' href='#'>Generar Reporte</a></li>
                                      </ul></li> 
                                      </ul></li>
                                      
                                      <li><a class='' href='#'>Calendario de Actividades ▼</a>
                                      <ul>
                                      <li><a class='' href='#'>Ver Actividades Pendientes</a></li>
                                      <li><a class='' href='#'>Ver y Asignar Tareas</a></li>
                                      <li><a class='' href='#'>Asignar Actividades Pendientes</a></li> 
                                      </ul></li>
                                      
                                      <li><a class='' href='#'>Asignar Hojas de Visita ▼</a>
                                      <ul>
                                      <li><a class='' href='#'>Asignar Hoja de Visitas a Usuario</a></li>
                                      
                                      </ul></li>
                                      <li><a class='' href='#'>Opciones ▼</a>
                                      <ul>
                                      <li><a class='' href='RegLog.php'>Ingresar Usuario</a></li>
                                      <li><a class='' href='index.php'>Cerrar Session</a></li>
                                      </ul></li>
                                      </ul>";
                            break;
                        
                         }
                         }
                        ?>
                       
                        
                    </ul>
                </div>
           
            </div>
          
        </div>
    </nav>
    
    </div>
</body>

</html>