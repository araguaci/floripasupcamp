<!DOCTYPE html>
<html lang="pt_BR">
<head>
<title>.:FLORIPA SUP CAMP:.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Club de Aventura, gestao, aula, surf, supsurf, aluguel, suptour, equipamento, qualidade, seguranca, consultoria, treinamento, evento turistico, roteiro ambiental e gastronomico." />
<meta name="keywords" content="surf, surfari, school, stand up paddle, supsurf, sup, surfpaddleboard, floripa, aula, class, aluguel, aventura, supclub, florianopolis, suptour, ecosup, treinamento, consultoria" />
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript">
   function myFocus(element) {
	 if (element.value == element.defaultValue) {
	   element.value = '';
	 }
   }
   function myBlur(element) {
	 if (element.value == '') {
	   element.value = element.defaultValue;
	 }
   }
</script>
<!--[if lte IE 6]>
        <style>
            div.irtopo img, div.irtopo a {
                position:absolute; 
                bottom:0px; 
                right:0;
                }
        </style>
    <![endif]-->
<!--[if lte IE 7]>
        <style>
            div.irtopo img,div.irtopo a {
                position:absolute; 
                bottom:0px; 
                right:0;
                }
        </style>
    <![endif]-->
<!--[if lte IE 8]>
        <style>
            div.irtopo img,div.irtopo a {
                position:absolute; 
                bottom:0; 
                right:0; 
                }
        </style>
    <![endif]-->
<!--[if lt IE 7]>
        <style type="text/css">
           #page-wrap { overflow: visible; height: 1%; }
        
           #header, #footer, #main, #page-wrap {
                width:expression(document.body.clientWidth < 1000? "1000px" : document.body.clientWidth > 1000? "1000px" : "auto");
            }
            
        </style>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#am-container a').lightBox();
});
</script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
</head>
<body onselectstart="return false;" oncontextmenu="return false;">
<div id="header"></div>
<div style="display:none;" id="top">
  <nav> 
    <!-- MENU APPLE -->
    <ul id="appleNav">
      <li><a href="#" title="">Quem Somos</a></li>
      <li><a href="#aventuras" title="">Aventuras</a></li>
      <li><a href="#parceiros" title="">Parceiros</a></li>
      <li><a href="#" title="">Dicas</a></li>
      <li><a href="#" title="">Redes Sociais</a></li>
      <li><a href="#contato" title="">Contato</a></li>
    </ul>
  </nav>
</div>
<div id="overlay" class="content">
  <div class="inner">
    <div id="box-shadow">
      <h1  class="titulo" style="font-size:30px; color:#2E4BB7; text-align:center; font-weight:bolder; margin-left: 30px;">FLORIPA SUP CAMP </h1>
    </div>
    <ul id="da-thumbs" class="da-thumbs">
    <li> <a href="http://www.floripasurfclub.com.br"> <img src="apoiadores/floripasurfclub.jpg" />
        <div><span>FLORIPA SURF CLUB SURF SCHOOL</span>
          <p style="padding:5px; color:#FFFFFF;"> Mais de 20 anos atuando no segmento do SURF. Promove aulas individuais, em grupo, para escolas e empresas.</p>
        </div>
        </a> </li>
      <li> <a href="http://www.centraldeaventuras.com.br/"> <img src="apoiadores/centraldeaventuras.jpg" />
        <div><span>Central de Aventuras</span>
          <p style="padding:5px; color:#FFFFFF;"> Club de Aventura, gestao, aula, surf, supsurf, aluguel, suptour, equipamento, qualidade, seguranca, consultoria, treinamento, evento turistico, roteiro ambiental e gastronomico.</p>
        </div>
        </a> </li>
      <li> <a href="http://www.escolasdesurf.org.br"> <img src="apoiadores/feceess-logo.png" />
        <div><span>F.E.C.E.E.S.S.</span>
          <p style="padding:5px; color:#FFFFFF;">Federação Catarinense de Especialistas em SUP & SURF. Trabalha na capacitação e orientação de escolas de SURF & SUP de Santa Catarina.</p>
        </div>
        </a> </li>
      <li> <a href="http://www.floripasupclub.com"> <img src="apoiadores/floripasupclub.jpg" />
        <div><span>FLORIPA SUP CLUB</span>
          <p style="padding:5px; color:#FFFFFF;"> Especializada Stand Up Paddle Surf, fornecendo treinamento, consultoria, promoção de eventos, aulas, aluguel, passeios ecológicos e SUPTOURS.</p>
        </div>
        </a> </li>
      
    </ul>
    </section>
  </div>
  <div class="clr"></div>
  <div id="panel" class="panel hide"></div>
</div>
</div>
<div class="am-container" id="am-container">
  <?php
					for ($imenu=0;$imenu<=46;$imenu++) {
						$imagem = str_pad((int) $imenu,3,"0",STR_PAD_LEFT);
						echo '
				<a href="images/floripasupcamp-'.$imagem.'.jpg"><img src="images/floripasupcamp-'.$imagem.'.jpg"></img></a>
						';
					}
                ?>
</div>
<div style="width:500px; margin: 15px auto 0;" align="center" class="drop-shadow lifted"><a href="http://www.santur.sc.gov.br/" target="_blank"><img src="images/selos_220_2011.gif" alt="Estado de Santa Catarina é Top of Mind em Destino Turistico no Brasil" width="482" height="140"></a>
  <p style="font-size: 14px; color:#000;">Estado de Santa Catarina é Top of Mind em destino turístico no Brasil.</p>
</div>
<div id="footer" class="clearfix">
  <p class="right" style="margin-top:20px; text-align:right; margin-right: 25px; padding-top:18px;">&copy; 2012 FLORIPA SUP CAMP <span>|</span> Design by <span style="color:#FF8000;"><a href="http://artesdosul.com" target="_blank" title="Artes do Sul">Artes do Sul</a> </span> <span>|</span> <span style="color:#FF8000; "><a href="http://twitter.com/#!/araguaci" target="_blank" title="Web Desing">@araguaci</a></span></p>
</div>
</div>
<script type="text/javascript" src="js/jquery.montage.min.js"></script> 
<script type="text/javascript">
			$(function() {
				/* 
				 * just for this demo:
				 */
				$('#showcode').toggle(
					function() {
						$(this).addClass('up').removeClass('down').next().slideDown();
					},
					function() {
						$(this).addClass('down').removeClass('up').next().slideUp();
					}
				);
				$('#panel').toggle(
					function() {
						$(this).addClass('show').removeClass('hide');
						$('#overlay').stop().animate( { left : - $('#overlay').width() + 20 + 'px' }, 300 );
					},
					function() {
						$(this).addClass('hide').removeClass('show');
						$('#overlay').stop().animate( { left : '0px' }, 300 );
					}
				);
				
				var $container 	= $('#am-container'),
					$imgs		= $container.find('img').hide(),
					totalImgs	= $imgs.length,
					cnt			= 0;
				
				$imgs.each(function(i) {
					var $img	= $(this);
					$('<img/>').load(function() {
						++cnt;
						if( cnt === totalImgs ) {
							$imgs.show();
							$container.montage({
								fillLastRow				: true,
								alternateHeight			: true,
								alternateHeightRange	: {
									min	: 90,
									max	: 240
								}
							});
							
							/* 
							 * just for this demo:
							 */
							$('#overlay').fadeIn(500);
						}
					}).attr('src',$img.attr('src'));
				});	
				
			});
		</script> 
<script type="text/javascript" src="js/jquery.hoverdir.js"></script> 
<script type="text/javascript">
            $(function() {	
                $('#da-thumbs > li').hoverdir();
            });
        </script>
</body>
</html>