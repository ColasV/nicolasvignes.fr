<?php 
function get_title ($get) {

	if ($get['view'] == 'competences') {
		return 'Compétences';
	}
	elseif ($get['view'] == 'contact') {
		return 'Contact';
	}
	elseif ($get['view']) {
		return 'Publications';
	}
	else {
		return 'Accueil';
	}


}


?>