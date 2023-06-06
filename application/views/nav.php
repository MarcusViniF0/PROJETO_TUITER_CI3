<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css2/estilo.css">
    <title>Bem vindo!</title>
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
        <li class="nav-item"><a class="nav-link" href="<?=base_url()?>index.php/Tuiter/timeline">timeline</a></li>
        <br>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>