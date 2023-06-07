<header id="cabecalho">
    <img src="_imagens/logo.jpg">
</header>
<br class="fixFloat">
<nav id="menu">
    <ul>
        <li><a href="index.html" target="_self">Home</a></li>
        <li><a href="cadastra-se.html" target="_self">Cadastra-se</a></li>
        <li><a href="login.html" target="_self">Login</a></li>
    </ul>
</nav>


<section id="form">
   <fieldset id="form_field">
       <legend id="form_legend">Login</legend>
       <form  method="post"  action="_php/login.php" >
           Usuario:<input type="text" name="nome_usuario"><br/><br/>
           Senha:<input type="password" name="Senha"><br/><br/>
           <input id="botao" type="submit" value="Entrar">
           <input type="reset" id="botao" value="Resetar">
       </form>
   </fieldset>



</section>
