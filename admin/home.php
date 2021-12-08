<?php
	include_once('header.php');

    if (isset($_GET['acao'])) {
		$acao = $_GET['acao'];
		if ($acao == 'bemvindo'){
			
			include_once('principal.php');
			

		}	if ($acao == 'principal'){
			
			include_once('principal.php');
			

		}
		elseif ($acao == 'limpeza') {
	    include_once('paginas/limpeza.php');
		} elseif($acao == 'expediente'){
			include_once('paginas/expediente.php');
		} elseif($acao == 'processamentoDados'){
			include_once('paginas/processamentoDados.php');
		} elseif($acao == 'perfil'){
			include_once('profile.php');
		} elseif($acao == 'relatorio'){
			include_once('relatorio.php');
		} elseif($acao == 'configuracao'){
			include_once('paginas/configuracao.php');
		} elseif($acao == 'eletrico2'){
			include_once('paginas/eletrico2.php');
		} elseif($acao == 'eletrico22'){
			include_once('paginas/eletrico2.php');
		}elseif($acao == 'expediente2'){
			include_once('paginas/expediente.php');
		}elseif($acao == 'limpeza2'){
			include_once('paginas/limpeza.php');
		}elseif($acao == 'processamentoDados2'){
			include_once('paginas/processamentoDados.php');
		};


        };
   include_once('rodape.php');
   
   if ($acao == 'bemvindo'){
	include_once('paginas/welcome.php');
   }

   
   
    ?>
	