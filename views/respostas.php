<?php 
include '../base.php';
include_once DIR_BASE.'/dao/contatoDAO.php';
include_once DIR_BASE.'/model/contato.php';



$msgDAO = new ContatoDAO();
$lista = $msgDAO->buscarTodasMensagens();
    $id = $_GET['id']


?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
   <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../css/styles.css">
   <title>Sistema</title>
</head>
<body>

<div id='cssmenu'>
<ul>
    <li id="opcaoHome"><a href="javascript:window.location='<?php echo URL_BASE.'/views/index.php';?>'"><span>Home</span></a></li>
   <li id="opcaoProdutos"> <a href="javascript:window.location='<?php echo URL_BASE.'/views/paginaProdutos.php';?>'" ><span>Produtos</span></a></li>
   <li class='active' id="opcaoEmpresa"><a href="javascript:window.location='<?php echo URL_BASE.'/views/paginaEmpresa.php';?>'"><span>Empresa</span></a></li>
   <li id="opcaoContato" class='last'><a href="javascript:window.location='<?php echo URL_BASE.'/views/paginaFaleConosco.php';?>'"><span>Fale Conosco</span></a></li>
   <li id="opcaoListarMensagens" class='last'><a href="javascript:window.location='<?php echo URL_BASE.'/views/paginaListarMensagens.php';?>'"><span>Listar Mensagens</span></a></li>
   <li id="respostas" class='last'><a href="javascript:window.location='<?php echo URL_BASE.'/views/respostas.php';?>'"><span>Respostas</span></a></li>
</ul>
</div>

<div id="mainContent" style="text-align: center;">
    <h1>Resposta Perguntas <?php echo $id +1 ?></h1>

        <table>
            <tr>
                <td>Pessoa:</td>
                <td><?php print_r($lista[$id]->getNome()); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php print_r($lista[$id]->getEmail()); ?></td>
            </tr>
            <tr>
                <td>pergunta: </td>
                <td><?php print_r($lista[$id]->getMensagem());?></td>
            </tr>
        </table>

    <form  method="get" action="<?php echo URL_BASE.'/controller/salvarResposta.php';?>">
        <input type="text" name="resposta">
        <input type="submit" value="Enviar" name="resposta" />
        <input name="id" id="id" type="hidden" value="<?php echo $_GET["id"];?>" />
            
    </form>




</div> 
</body>
</html>