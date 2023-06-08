<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css2/estilo.css">
    <title>login</title>
</head>
<body>

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
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/timeline">Timeline</a></li>
        <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/login">Login</a></li>
        <br>
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/Cadastro">Cadastra-se</a></li>
        <br>
        <br>
        <section id="form">
   <fieldset id="form_field">
       <legend id="form_legend">Login</legend>
       <p><?=$this->session->flashdata("msg")?></p>
       <form  method="post"  action="<?=base_url('index.php/Tuiter/autenticar')?>">
           Email:<br><input type="text" name="Senha">
          </br>
           Senha:<br><input type="password" name="Senha">
          </br>
           <input id="botao" type="submit" value="Entrar"><br>
           <input type="reset" id="botao" value="Cancelar"><br>
       </form>
   </fieldset>



</section>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <br>
        
          <div>
            <br>
            <header id="cabecalho">
</header>

          </div>
      </ul>
    </div>
  </div>

</nav>
</body>
</html>