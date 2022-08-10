<?php
//esto es un ejepmlo del llamado a un servicio GET

/***************llamado servicio */
require_once ('../../funciones/wsdl/clases/consumoApi.class.php');
/* EJEMPLO PARA EL GET */

//WS datos empleado
$token = '5adb40fdd6f8eb4fd0523376538eb533';
$URL	= 'http://localhost/siaho/funciones/wsdl/empleados?NumPersonal=13336768';
$rs 	= API::GET($URL,$token);
$array  = API::JSON_TO_ARRAY($rs);
$user = $array;
$reporte24h= $user;

$preCargaComplejo_id=$user[0]['complejoId'];

/* Ws  datos repoets24h */
$token = '5adb40fdd6f8eb4fd0523376538eb533';
$URL	= "http://localhost/siaho/funciones/wsdl/r24h?preCargaComplejo_id=$preCargaComplejo_id";
$rs 	= API::GET($URL,$token);
$array  = API::JSON_TO_ARRAY($rs);
$reporte24h= $array;
//print_r($reporte24h);die;
/******* */


?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Navbar & Tabs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../funciones/funcionesGenerales/plugins/fontawesome-free/css/all.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../funciones/funcionesGenerales/plugins/sweetalert2/sweetalert2.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../funciones/funcionesGenerales/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../funciones/funcionesGenerales/dist/css/adminlte.min.css">
</head>

<body><div class="row">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">


                <?php
                        // [0] => Array ( [tabs] => Array ( [R24HTabsId] 
                        foreach($reporte24h as $tabs){
                            //print_r($tabs['tabs']['R24HTabsId']);die;
                            echo " <a 
                                        class='nav-link' 
                                        id='tabs-".$tabs['tabs']['R24HTabsId']."-tab' 
                                        data-toggle='pill' 
                                        href='#tabs-".$tabs['tabs']['R24HTabsId']."' 
                                        role='tab' 
                                        aria-controls='vert-tabs-profile' 
                                        aria-selected='false'>
                                        ".$tabs['tabs']['descripcion']."
                                    </a> ";         
                            }
                    ?>

                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <!--desde aqui -->
                <?php 
                    foreach($reporte24h as $tabs)
                                                                 {
                   
                        foreach($tabs['TabsEquipos'] as $tabsEquipo)
                        {?>
                                                                                                                                                                        
                            <div class="tab-pane text-left fade" id="<?php echo "tabs-".$tabs['tabs']['R24HTabsId'];?>" role="tabpanel" aria-labelledby="<?php echo "tabs-".$tabs['tabs']['R24HTabsId']."-tab";?>">
                                <div class='row'>                                                                                                               
                                            <div class='col-sm-2 p-3 bg text-black'><?php echo $tabsEquipo['nombre']; ?></div>
                                            <div class='col-sm-1 p-3 bg text-white text-center'><input type='radio' id='<?php echo "Res-".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' class='form-radio validate[required, requireEveryRow]' name='<?php echo "Res-".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' value='Si' aria-labelledby='label_9_col_1 label_9_row_2' /></div>
                                            <div class='col-sm-1 p-3 bg text-white text-center'><input type='radio' id='<?php echo "Res-".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' class='form-radio validate[required, requireEveryRow]' name='<?php echo "Res-".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' value='No' aria-labelledby='label_9_col_1 label_9_row_2' /></div>
                                            <div class='col-sm-4 p-3 bg text-white'><input type='text'id='<?php echo "Obser-".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' class='form-textbox validate[required, requireEveryRow]' size='80' name='<?php echo "Observacion_".$tabs['tabs']['R24HTabsId']."-".$tabsEquipo['equipoId'];?>' style='width:100%;box-sizing:border-box' value='' aria-labelledby='label_9_col_3 label_9_row_2' /></div>
                                    </div>
                            </div>
                


                    <?php } 
                    }?> 


  
                  
                  


                </div>
              </div>
            </div>
<!-- jQuery -->
<script src="../../funciones/funcionesGenerales/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../funciones/funcionesGenerales/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../funciones/funcionesGenerales/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../funciones/funcionesGenerales/dist/js/demo.js"></script>
            </body>