<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <!--fle conosco--> <link rel="stylesheet" href="css/feleconosco.css">
    
    <title>Fele Conosco</title>

</head>
<body>

<div></div>
<form class="formulario"method="post" enctype="multipart/form-data">

    <h1 class="tituloFale"><i class="bi bi-envelope"></i>Fale Conosco</h1>

    <!-- talvez colocar uma img ou texto pra elabora -->

        <label class="">
            <span>Nome</span>
            <input type="text" name="Nome" class="campo" placeholder="Digite o seu Nome" required>
        </label>

        <label class="">
            <span>E-mail</span>
            <input type="Email" name="Email" class="campo" placeholder="Digite seu Email" required>
        </label>

        <label class="">
            <span>Assunto</span>
            <input type="text" name="Assunto" class="campo" placeholder="Digite um Assunto" required>
        </label>   

        <label class="">
            <span>Anexar Arquivo</span>
            <input type="file" name="Arquivo" id="Arquivo" class="campo" required>
        </label>

        <label class="naoexibir">
            <span>Não preencher:</span><br>       
            <input type="text" name="Url" value=""></p>
        </label>
        
        <label class="label">
            <span>Mensagem</span>
            <textarea name="Mensagem" class="campo" placeholder="Deixe sua Mensagem" required=""></textarea>
        </label>
        
        <label class="label">  
            <input type="hidden" name="Acao" value="enviar"> 
            <button type="submit" class="botao"> Enviar </button>
    </label>

</form>

<script src=""></script>
<script src=""></script>

</body>
</html>


