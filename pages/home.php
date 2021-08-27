<?php
    require_once('dados/produtos.php');
?>

<style>
    .card-produto{
    width: 200px;
    text-align:center;
    margin: 30px;
    }

    .card-produto img{
    width: 200px;
    height: 200px;
    border-radius: 100px;
    }

   
</style>

<?php
    foreach($produtos as $id => $produto):
    
?>
<a href="index.php?page=produto&id=<?php echo $id ?>">
<div class="card-produto">
    <div class="img7"><img src="Imagens/<?php echo $produto['imagem']?>">
    </div>
    <h3><?php echo $produto['nome']?></h3>
</div>
</a>
<?php
    endforeach;
?>
