<div class="page-hider">
    <h1>Stricky footer with fixed navbar</h1>
</div class="container">
    <form method="post" action="<?=base_url()?>index.php/Tuiter/atualizar">
        <textarea name="mensagem"><?=$post->msg?></textarea>
        <input type="hidden" name="id" value="<?=$post->id?>"/>
        <button type="submit">Atualizar</button>
    </form>
</div>
