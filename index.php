<html>
<head>
	<meta charset="UTF-8">
	<title>SWI Online</title>
	<meta name="MobileOptimized" content="320">
	<!--É uma etiqueta criada de versões antigas de Internet Explorer no sistema Windows Mobile. Faz com que o navegador adapte o conteúdo da página à janela do dispositivo. Permite que o navegador não faça nenhuma mudança no layout da página que ele se por content="width" ele se se adaptará à largura de cada dispositivo ou usa um numero que se promuciara em px contenhase-->
	<meta name="HandheldFriendly" content="True">
	<!--Esta etiqueta informa ao navegador que a página está otimizada para móveis e que, portanto, não se deve escalar seu conteúdo ao mostrá-lo na tela dos dispositivos. Criada para os navegadores de AvantGO, compatível com dispositivos BlackBerry, não chegou a se popularizar em muitas outras plataformas.-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta name="viewport" content="width=320px, user-scalable=no"> O tamanho do viewport é de 320px e desabilitado o zoom com 2 toks
	deixar o user-scalable habilitado quando utilizamos o viewport sem ser  customizado.
	(DAR O ZOOM)Criada pela apple para ser usada em seus dispositivos e hj considerada padrão indica ao navegador que o website está otimizado para móveis, mas neste caso nos serve também para especificar como o cliente web deve interpretar o documento e como deve renderizá-lo -->
	<meta http-equiv="cleartype" content="on">
	<!--exibir fontes de computador de forma clara e suave-->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!--exibir em modo de tela cheia -->
	<meta name="format-detection" content="telephone=no">
	<!--ativar determinados numeros de telefone na pagina -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/152x152.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/152x152.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/152x152.png">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="img/152x152.png">
	<!--imgs favicon-->
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="//www.cfi.com.br">
	<!--<link rel="dns-prefetch" href="//cms.wmobjects.com.br">
	<link rel="dns-prefetch" href="//static.wmobjects.com.br">
	<link rel="dns-prefetch" href="//onsite.chaordicsystems.com">
	<link rel="dns-prefetch" href="//chaordicsystems.com">
	<link rel="dns-prefetch" href="//akamai.net">-->
	<meta name="description" content="Swi online" />
	<!--A metatag description serve para informar uma descrição sobre o site. Nesta metatag você vai dizer para que serve o site, qual o assunto principal. É importante saber que os sistemas de busca indexam em média 250 caracteres desta metatag-->
	<link rel="canonical" href="//www.swi.com.br/">
	
	<meta property="og:title" content="Sistema de relatorios - Bem vindos!"/>
	<meta property="og:description" content="Tabela com os dados da tabela de usuarios internos"/>
	<meta property="og:url" content="//www.swi.com.br/"/>
	<meta property="og:type" content="Website"/>
	<meta property="og:site_name" content="cfi"/>
	<meta name="google-site-verification" content="codigo de verificacao" />
	<!--verificador do google -->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="dist/css/footer-fixo.css">
	<link rel="stylesheet" href="dist/css/docs.css">
	<link rel="stylesheet" href="dist/css/style.css">	
	<!--css-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrap">
	<header>
		<div class="container">
			<div class="row">
				<h1>
					<a href="index.php">
						<img src="dist/img/gti.png" height="92" width="144" alt="logo da gti" title='GTI - GESTÃO DA TECNOLOGIA DA INFORMAÇÃO LTDA'>
					</a>
				</h1>
			</div><!--row-->
		</div><!--container-->
	</header>
<!-- Wrap all page content here -->

      <!-- Begin page content -->
<?php /*?> <?php
  $link = pg_Connect("host = postgresql01.cfi-pe.com.br dbname= cfi_pe2 user= cfi_pe2 password=postgres");
  $result = pg_exec($link, "select * from versaosicap where bfg_delete = 'N' and ddata <= current_date order by nid_versaosicap desc");
  $numrows = pg_numrows($result);
  ?>
      <div class="container">
<div class="bs-docs-example">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Programa</th>
                  <th>Versão</th>
                  <th>Descrição</th>
                </tr>
              </thead>
              <tbody>
  <?php

   for($ri = 0; $ri < $numrows; $ri++) {
	    echo "<tr>";
	    $row = pg_fetch_array($result, $ri);

		$a = $row["ddata"];
		$ano = substr($a, 0, 4);
		$dia = substr($a, 8, 2);
		$mes = substr($a, 5, 2);
		$data_pt = $dia . '/' . $mes . '/' . $ano;

	    echo " <td>", $data_pt , "</td>
	   <td>", $row["cprograma"], "</td>
	   <td>", $row["cversao"], "</td>
	   <td>", $row["cdescricao"], "</td>
	  </tr>
	  ";
   }
   pg_close($link);
  ?>


              </tbody>
            </table>
      </div>
    </div>			
<?php */?> 

<div class="container">
    <div class="col-lg-12">
        <ul id="myTab" class="nav nav-tabs">
    	    <li class="active"><a href="#atualizacao" data-toggle="tab">atualizacao</a></li>
            <li><a href="#prox_atualizacao" data-toggle="tab">Proximas atualizações</a></li>
        </ul>
    	<div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active area_central" id="atualizacao">
<form class="form-inline" role="form">
	<legend>Perído</legend>  
	<div class="form-group">
	    <label class="sr-only" for="exampleInputEmail2">Periodos</label>
	    <input type="text" class="form-control" id="data" placeholder="12/02/2014">
  </div>
  a
	<div class="form-group"> 
		<input type="text" class="form-control" id="data" placeholder="12/02/2014">
  	</div>

	<div class="form-group">
		<input type="text" class="form-control" id="data" placeholder="MÓDULO COMBO">
  	</div>  	

  	<button type="button" class="btn btn-default">Pesquisar</button>

</form>
<div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
          	<legend clas'left'>Data: 10/02/2014 - Versão 1.0</legend>
          	<p class='pp'>Data: 10/02/2014</p>
          	
            <th>Módulo</th>
            <p class='pp'>Versão 1.0</p>
            <th>Descrição</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
            </div><!--tab-pane fade in active area_central-->
	        
	        <div class="tab-pane fade area_central" id="prox_atualizacao">
			sss            
	       	</div><!--row-->
         </div><!--.myTabContent-->
	</div><!--col-lg-12-->
</div><!--container-->
</div><!--#wrap-->
	

    <div id="footer">
      <div class="container">
      	<address class='col-md-7'>
      		<p>GTI - GESTÃO DA TECNOLOGIA DA INFORMAÇÃO LTDA</p>
      		<p>CNPJ: 12.388.998/0001-22</p>
      		<p>R. IRENE RAMOS GOMES DE MATTOS, 97 CXPST 355
			PINA - RECIFE - PE</p>
			<p>CEP: 51.011-530</p>						
			<p>Fone: 081 3428-5151</p>
      	</address>
      </div>
    </div>

	<script href'dist/js/bootstrap.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
	<!--js-->

</body>
</html>