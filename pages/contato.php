
<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = "form";
    }
    
    if($action == "form"):
?>

<form action="?page=contato&action=enviar" method="POST" class="form-contact">
    <div><h1>Contato e Pedidos</h1></div>

    <div>
        <input type="text" placeholder="Nome" name="nome">
    </div>

    <div>
        <input type="email" placeholder="E-mail" name="email">
    </div>

    <div>
        <input type="text" placeholder="Telefone" name="telefone">
    </div>
    <div>
        <textarea name="mensagem" placeholder="Descreva aqui sua mensagem ou pedido" rows="6"></textarea>
    </div>

    <div>
        <button>Enviar</button>
    </div>

</form>
<?php endif; ?>

<?php 
    if($action == "enviar"):
?>
     <div class="message">
        Sua mensagem foi enviada com sucesso!
        <p>Em breve entraremos em contato.</p>
     </div>
<?php endif; ?>