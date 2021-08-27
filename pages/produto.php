<style>
    .prod-cl{
        width: 50%;
    }
    .prod-cr{
        width: 50%;
        margin-bottom: 20px;
    }
    .prod-cl img{
        width: 300px;
        height: 300px;
        border-radius: 150px;
    }

    .preco-unidade{
        font-size: 16px;
    }

    .prod-cr h2{
        color: #423F3E;
    }

    .prod-cr p{
        font-size:24px;
        font-weight:lighter;
        margin-bottom:30px;
    }
    .button{
        text-decoration: none;
        color: #FFF;
        background-color: #BFA2DB;
        padding: 12px;
        font-weight: bold;
        border-radius: 7px;
    }
</style>

<?php
    require_once('dados/produtos.php');

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($produtos[$id])) {
            $id = null;
        }
            
    }
        

     if(is_null($id)){

?>

    <div>
        O código nulo ou não existente.
    </div>

<?php
    }else{


?>

<div class="prod-cl">
    <img src="Imagens/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
</div>

<div class="prod-cr">
    <h1><?php echo $produtos[$id]['nome']?></h1>
    <h2><?php echo 'R$'. number_format($produtos[$id]['preco'], 2, ',', '.')?> <span class="preco-unidade">/unidade</span></h2>

    <p> 
    <?php  echo $produtos[$id]['descricao']?>
    </p>
    <a href="index.php?page=contato" class="button">
        Fazer Pedido
    </a>
</div>
<?php 
    }
?>