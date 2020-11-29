﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/validacion.js"></script>
</head>
<body id="page1">
    <div class="main">
        <!-- content -->
        <section id="content">
        <?php include('encabezado.php'); ?>
        <?php include('menu.php'); ?>
        <article class="col2 pad_left1">
			<h2>Baja</h2>
                        <form id="ContactForm" action="baja_proceso.php" method="get" id="ContactForm">
				<div>
					<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" name="num_serie" id="num_serie" /></div>
						Numero de serie:<br />
					</div>                               
                                    <a href="#" class="button1" onClick="return valida_baja()">Dar de Baja</a>
				</div>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 
		