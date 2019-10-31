<?php
	$diretorio = "diretorio/";

	$tipos = array('image/jpeg', 'image/png', 'image/gif');	

	$upload = $diretorio.basename($_FILES['meuarquivo']['name']);

	if(in_array($_FILES['meuarquivo']['type'],$tipos)){
		if(move_uploaded_file($_FILES['meuarquivo']['tmp_name'],$upload)){
			echo "Arquivo enviado com sucesso!";
		}else{
			echo "Arquivo não enviado.";
		}
	}else{
		echo "Esse tipo de arquivo não é permitido";
	}


	

	