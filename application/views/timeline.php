    
    <div class="container">
            <?php foreach ($posts as $p){ ?>
                    <div class="panel painel-default">
                    <div class="panel-heading"><?= $p->msg?></div>
                    <div class="panel-body"><?=$p->datahora?></div>
                    <div class="painel-footer">
                    <a href="<?=base_url()?>index.php/Tuiter/excluir/<?=$p->id?>">Excluir</a>
                    <a href="<?=base_url()?>index.php/Tuiter/editar/<?=$p->id?>">Editar</a>
                    </div>
                    </div>
                    <?php } ?>
                    </div>
                    </div>
