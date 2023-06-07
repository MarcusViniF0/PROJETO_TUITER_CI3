<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css2/estilo.css">
    <title>Cadastro</title>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bem vindo ao resultado do CRUD CI3</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/Home">Home</a></li>
        <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/tuitar">Tuiter</a></li>
        <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/timeline">timeline</a></li>
        <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/irlogin">Login</a></li>
        <br>
        <li><a href="cadastra-se.html" target="_self">Cadastra-se</a></li>
        <br>
        <br>
        </li>
        <br>
          <div>
            <br>
            <header id="cabecalho">
</header>
<section id="form">
   <fieldset id="form_field">
       <legend id="form_legend">Cadastro</legend>
       <form  method="post"  action="<?=base_url('index.php/Tuiter/registrar')?>">
       <br>
           nome:<br><input type="text" name="nome">
          </br>
           login:<br><input type="text" name="login">
          </br>
           Senha:<br><input type="password" name="senha">
          </br>
           <input id="botao" type="submit" value="Cadastrar"><br>
           <input type="reset" id="botao" value="Cancelar"><br>
       </form>
   </fieldset>



</section>
          </div>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>