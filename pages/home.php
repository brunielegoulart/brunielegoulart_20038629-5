<?php
    require_once('dados/produtos.php');
?>

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
