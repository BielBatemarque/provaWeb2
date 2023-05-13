<?php
    include_once '../base.php';
    include_once DIR_BASE.'/dao/contatoDAO.php';
    include_once DIR_BASE.'/model/resposta.php';
    
	$codigo = $_POST['id'];
    $mensagem = $_POST['mensagem'];

    $res = new Resposta();
    $res->setDescricao($mensagem);
    $res->setCodigo($codigo);
    
    $msgDAO = new ContatoDAO();
    $resultado = $msgDAO->inserirResposta($res);
          
    session_start();
    $_SESSION['msg'] = "Erro ao salvar resposta!";
    $_SESSION['tipo'] = 'erro'; 

    if($resultado == true){
        $_SESSION['msg'] = "Mensagem resposndida com Sucesso!";
    $_SESSION['tipo'] = 'sucesso'; 
    }

    header('location: '.URL_BASE.'/views/paginaListarMensagens.php');
    


