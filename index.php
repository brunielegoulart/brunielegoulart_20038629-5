<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copo da Felicidade gourmet</title>
    <style>
        body{
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        header {
            height:100px;
            background-color:#FDEFEF;
            text-align:center;
            padding: 15px;
        
        }
        .logo {
            height: 120px;
        }
            
        nav {
            background-color:#FFBCBC;
        }
        nav ul{
            list-style: none;
            width: 100%;
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content:center ;
        }
        nav ul li{
            padding-top:12px;
            padding-bottom: 12px;
            padding-left: 25px;
            padding-right: 25px;
        }
        .content{
            min-height:400px;
        }
        footer{
            background-color:#FFBCBC;
            min-height:25px;
            padding:10px;
        }

        .container{
            max-width: 800px;
            display: flex;
            margin:auto;
            padding-top: 30px;
            flex-wrap: wrap;
        }

    </style>
</head>
<body>
    <header>
    <div class="logo"><img src="Imagens/Logo.png" class="logo"></div>
        
    </header>

    <nav>
        <ul>
            <li>Home</li>
            <li>Quem somos</li>
            <li>Contato</li>
            <li>Localização</li>
        </ul>
    </nav>

    <div class="content">
        <div class="container">
        <?php
            include('pages/home.php');
        ?>
        </div>
        
    </div>

    <footer>
        <p>Acadêmica:Bruniele Goulart Barbosa | |  RA: 20038629-5</p>   
    </footer>
</body>
</html>