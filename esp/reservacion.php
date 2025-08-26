<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Country Hotel & Suites | Reservación</title>
        <!--<script src="src/js/jscal2.js"></script>
    <script src="src/js/lang/es.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="src/css/border-radius.css" />-->
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style-reservas.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    
  	<!-- Google Fonts call. Font Used Open Sans & Open Sans Condensed -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    
    
    <!--</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />-->

    <!-- ********** SISTEMA RESERVAS ********** -->
    <script src="http://country.hotelesbooking.com.mx/js/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <script src="http://country.hotelesbooking.com.mx/js/bootstrap.min.js"></script>
    <link href="http://country.hotelesbooking.com.mx/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://country.hotelesbooking.com.mx/css/bootstrap-reset.css" rel="stylesheet">

      <!-- Custom styles for this template -->
    <link href="http://country.hotelesbooking.com.mx/css/form-reservas.css" rel="stylesheet">
    <link href="http://country.hotelesbooking.com.mx/css/form-reservas-responsive.css" rel="stylesheet" />

    <!--datepicker-->
    <link rel="stylesheet" href="http://country.hotelesbooking.com.mx/css/jquery-ui.css">
    <script src="http://country.hotelesbooking.com.mx/js/jquery-ui.js"></script>

    <!--Validate-->
    <script src="http://country.hotelesbooking.com.mx/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="http://country.hotelesbooking.com.mx/css/validate.css">

    <!-- Alerts-->
    <script src="http://country.hotelesbooking.com.mx/js/alerts/jquery-confirm.js"></script>
    <link href="http://country.hotelesbooking.com.mx/css/alerts/jquery-confirm.css" rel="stylesheet">

    <!-- WEBSERVICE ACCESS -->
    <script src="http://country.hotelesbooking.com.mx/js/reservaciones_web_fn.js"></script>

    <!-- ********** SISTEMA RESERVAS ********** -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php"><img src="assets/img/logosmall.png" alt="Country Hotel and Suites"></a>
            <div class="nav-collapse collapse">
            <ul class="nav">
            	<li class="dropdown">
            		<a href="index.php" class="dropdown-toggle" >Inicio </a>
                  
            	</li>
            	<li class="dropdown">
            		<a href="nuestrohotel.php" class="dropdown-toggle" >Nuestro Hotel </a>
                   
            	</li>
            	
                <li class="dropdown">
            		<a href="servicios.php" class="dropdown-toggle" >Servicios </a>
                   
            	</li>
            	
            	
            	
            	<li class="dropdown">
            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Habitaciones <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li><a href="master.php">Habitación Master</a></li>
                    	<li><a href="doble.php">Habitación Doble</a></li>
                    	<li><a href="sencilla.php">Habitación Sencilla</a></li>
                    	
                    	
	                   
                    </ul>
            	</li>
            	<li class="dropdown">
            		<a href="galeria.php" class="dropdown-toggle" >Galería </a>
                    
            	</li>
            	<li class="dropdown">
            		<a href="contacto.php" class="dropdown-toggle" >Contacto </a>
                    
            	</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">

            <br>
            <br>
            <div class="span2"></div>
            <div class="span8">
                <h4 class="title-bg">CONSULTA RESERVACIÓN</h4>
                <p>Por favor llene el siguiente formato para solicitar una reservación sin hacer el cargo en este momento. Nos pondremos en contacto con usted en la brevedad posible.</p>
            </div>
        </div>
    </div>
    
    <!-- BLOQUE RESERVACIONES -->
    <div style="position: relative;">
        <div class="container">
            <div id="container" class="clearfix">
                <div class="element  clearfix col2-4 post inicio">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 style="font-size: 18px;">Reserva en línea Country Hotel</h2>
                        </header>
                        <div class="panel-body">

                            <!-- FORMULARIO DE SELECCION DE FECHAS -->
                            <form role="form" name="frmDatos" id="frmDatos" class="cmxform" method="post">
                                <input type="hidden" id="cboMascotas" name="cboMascotas" value="0">
                                

                                <div class="form-group col-lg-2">
                                    <label >Check-In:</label>
                                    <input type="text" class="form-control required" id="txtCheckIn" name="txtCheckIn" placeholder="" required="required">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label >Check-Out:</label>
                                    <input type="text" class="form-control required" id="txtCheckOut" name="txtCheckOut" required="required">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label >Habitaciones:</label>
                                    <select class="form-control required"  id="cboNumHabitaciones" name="cboNumHabitaciones" required="required">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-1">
                                    <label >Adultos:</label>
                                    <select class="form-control required"  id="cboNumAdultos" name="cboNumAdultos" required="required">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-1">
                                    <label >Niños:</label>
                                    <select class="form-control required"  id="cboNumNinos" name="cboNumNinos" required="required">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-1" id="divNumNoches">
                                    <label >Noches:</label>
                                    <input type="text" class="form-control" id="txtNumNoches" name="txtNumNoches" disabled="disabled">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label >.</label>
                                    <button type="submit" class="form-control btn btn-info" id="btnConsultar" name="btnConsultar">Consultar</button>
                                </div>
                                <div class="border-bottom"></div>
                            </form>

                            

                            <div id="lblResults"></div>


                            <!-- FORMULARIO DE REGISTRO DE CLIENTE -->
                            <div id="lblRegCliente">

                            <div class="form-group col-lg-12">
                                <h2 style="font-size: 18px;">Información de Registro</h2>
                                <h4>AVISO DE PRIVACIDAD</h4>
                    
                                <p style="text-align:justify;">Usted nos autoriza a usar su número de tarjeta de crédito para realizar su pago en línea, y confirma expresamente conocer y aceptar nuestras políticas de reservación y cancelación. La reservación quedará garantizada al efectuarse el pago total en línea. El monto correspondiente a su reservación, será cargado a su tarjeta de crédito. Usted deberá de presentar su notificación de reservación cuando haga su check-in.</p>
                                <p>Country Hotel, con domicilio en Ave. Circ. Jorge Alvarez del Castillo No 1482 Col. Chapultepec Country 44620, Guadalajara Jalisco, Mexico , es responsable de recabar sus datos personales, del uso que se les de a los mismos y de su protección.</p>
                                <p>Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar a calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos requerimos obtener los siguientes datos personales.<br>
                                <input type="checkbox" name="chkAceptar" id="chkAceptar" value="1" style="width:25px; height:25px;" checked="checked">Acepto terminos y Condiciones
                                </p >
                            </div>

                            <div class="col-lg-4">
                                <h4>Información de la Habitación</h4>
                                <hr style="border-top: 1px solid #000;">
                                <div class="form-group">
                                    <label id="lblTituloHab"></label>
                                </div>
                                <div class="form-group">
                                    <label id="lblDescHab"></label>
                                </div>

                                <h4>Información de la Reserva</h4>
                                <hr style="border-top: 1px solid #000;">

                                <div class="form-group">
                                    <label id="lblCantHab"></label><br>
                                    <label id="lblCheckInHab"></label> / <label id="lblCheckOutHab"></label><br>
                                    <label id="lblAdultosHab"></label> / <label id="lblAdultExtHab"></label><br>
                                    <label id="lblNinosHab"></label><br>
                                    <label id="lblMascotasHab"></label>
                                </div>

                                <h4>Información del Hospedaje</h4>
                                <hr style="border-top: 1px solid #000;">

                                <div class="form-group">
                                    <label style="text-align:right; width:100%;">
                                        Cant. Noches: 
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblNochesHab"></span>
                                    </label><br>

                                    <label style="text-align:right; width:100%;">
                                        Tarifa: 
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblTarifaHab"></span>
                                    </label><br>

                                    <label style="text-align:right; width:100%;">
                                        Costo Adultos Ext.:
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblCostoAdultExtHab"></span> 
                                    </label><br>
                                    <label style="text-align:right; width:100%; display:none;">
                                        Costo Mascotas:
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblCostoMascotasHab"></span> 
                                    </label><br>
                                    <label style="text-align:right; width:100%;">
                                        Importe:
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblImporteHab"></span> 
                                    </label><br>
                                    <label style="text-align:right; width:100%;">
                                        Impuestos: 
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblImpuestosHab"></span> 
                                    </label><br>
                                    <label style="text-align:right; width:100%;">
                                        Total: 
                                        <span style='display:inline-block; position:relative; width:90px;' id="lblTotalHab"></span> 
                                    </label><br>
                                </div>

                            </div>


                            <div class="col-lg-8">
                                <h4>Información de Pago</h4>

                                <form role="form" name="frmDatosClie" id="frmDatosClie" class="cmxform" method="post">

                                    <div class="form-group">
                                        <label >Nombre(s):</label>
                                        <input type="text" class="form-control required" id="txtNombre" name="txtNombre" placeholder="" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label >Apellidos:</label>
                                        <input type="text" class="form-control required" id="txtApellidos" name="txtApellidos" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >Teléfono:</label>
                                        <input type="text" class="form-control required" id="txtTel" name="txtTel" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >Ciudad:</label>
                                        <input type="text" class="form-control required" id="txtCiudad" name="txtCiudad" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >E-mail:</label>
                                        <input type="text" class="form-control required" id="txtEmail" name="txtEmail" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >Tarjeta:</label>
                                        <select name="cboTipoTarjeta" id="cboTipoTarjeta" class="form-control required" required="required">
                                            <option value="">Seleccione tipo de tarjeta</option>
                                            <option value="VIS" >Visa</option>
                                            <option value="MAS" >Master Card</option>
                                            <option value="AME" >American Express</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label >Vigencia</label>
                                        <select name="cboMesTarjeta" id="cboMesTarjeta" class="form-control required" required="required">
                                            <option value="">MM</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <select name="cboAnhoTarjeta" id="cboAnhoTarjeta" class="form-control required" required="required">
                                        </select>
                                        <script>
                                         var fecha= new Date();
                                         var anho=fecha.getFullYear();
                                         var limit=10;
                                         var optionsSelec='<option value="">AAAA</option>';
                                         for(var i=0;i<limit;i++){
                                             var anhoOption=anho+i;
                                             optionsSelec+='<option value="'+anhoOption+'">'+anhoOption+'</option>';
                                         }
                                         var selectSalida=document.getElementById("cboAnhoTarjeta");
                                         selectSalida.innerHTML=optionsSelec;
                                         </script>
                                    </div>

                                    <div class="form-group">
                                        <label >Número de Tarjeta:</label>
                                        <input type="text" class="form-control required" id="txtNumeroTar" name="txtNumeroTar" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >Número de seguridad:</label>
                                        <input type="text" class="form-control required" id="txtNumeroSeg" name="txtNumeroSeg" placeholder="" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label >Observaciones y Especificaciones:</label>
                                        <textarea rows="10" name="txtObservaciones" id="txtObservaciones" class="form-control"></textarea>
                                    </div>

                                    <button type="submit" class="form-control btn btn-info" id="btnRegistrar" name="btnRegistrar">Reservar</button>

                                </form>

                            </div>


                            </div>

                            <!-- FORMULARIO DE REGISTRO DE CLIENTE -->
                            <div id="lblReservaExitosa">
                                <div class="form-group col-lg-12">
                                    <h2 style="font-size: 18px;">Reservaci&oacute;n Exitosa</h2>

                                    <p style="text-align:justify;">Country Hotel agradece tu preferencia, a continuación se muestra tu folio de reserva. Conservalo para cualquier aclaración.</p>
                                    <p style='color:#069; font-size:18px;' align='center' id="pFolioReserva" ></p>
                                    <p style="text-align:justify;">Se envío una copia de la reservación a su correo, por favor verifica tu bandeja de entrada en caso de que no te haya llegado en un plazo de 15 minutos, verifica tu carpeta de spam o ponte en contacto con el hotel.</p>

                                </div>
                            </div>


                        </div>
                    </section>



                </div>
            </div>
        </div>

    </div>
    <!-- BLOQUE RESERVACIONES -->
    







    
	<div id="twitterwrap">
		<img src="assets/img/twitter.png" alt="Country Hotel and Suites"><br>
		<br>
	  <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script><!-- Script Needed to load the Tweets -->
		<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/basicoh_.json?callback=twitterCallback2&count=1"></script>
  </div>
	<div id="footerwrap">
	  <p>Av. Circ. Jorgé Álvarez del Castillo No 1482 | Col. Chapultepec Country C.P. 44620</p>
	<p>Guadalajara Jalisco, México |Tel. 01 (33) 3823.0492 </p>
	<br>
	<p><a href="mailto:reservaciones@countryhotel.com.mx" TARGET="_blank">reservaciones@countryhotel.com.mx</a></p>
	<br>
	<div class="social_icons"><a href="https://www.facebook.com/CountryHotelGuadalajara" TARGET="_blank"><img src="assets/img/social/white/facebook.png" width="30" height="30" alt="Facebook"></a></div><!-- End of social icons -->

	
	</div><!-- /footerkwrap -->
	
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/theme.js"></script>
    
    
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>-->
  </body>
</html>
