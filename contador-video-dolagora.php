<?
include_once '../app/painel/modulo-doltv/classes/class.Fachada.php';
include_once '../app/painel/modulo-video/classes/class.Fachada.php';

// Criando um objeto do tipo Fachada
$fachada = new FachadaVideo ();
$fachadaDOLTV = new FachadaDolTV ();


	 if (isset ( $_POST['id'] )) {
			$num_vis_doltv_video = $fachadaDOLTV->getDol_tv_visualizacoesPorVideo ( $_POST['id'] );
	
		if ($num_vis_doltv_video) {
			$num_vis_doltv_video->setContador ( $num_vis_doltv_video->getContador () + 1 );
			$num_vis_doltv_video->setDt_ultimo_acesso ( date ( 'd/m/Y' ) );
			$num_vis_doltv_video->setHr_ultimo_acesso ( 'H:m:s' );
			$fachadaDOLTV->alterarDol_tv_visualizacoes ( $num_vis_doltv_video );
		} else {
			$num_vis_doltv_video = new Dol_tv_visualizacoes ( '', $_POST['id'], 1, date ( 'd/m/Y' ), date ( 'H:m:s' ) );
			$fachadaDOLTV->inserirDol_tv_visualizacoes ( $num_vis_doltv_video );
		}

	}
?>