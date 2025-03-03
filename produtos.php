<?php
include_once('templates/header.php');
?>
<div class="tela-produtos">
    <h2>CONFIRA NOSSOS PRODUTOS</h2>

    <div class="produtos-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="tela-produtos-card-produto">
                <img src="assets/produtos_escova_ah/<?= $produto['image'] ?>" alt="">
                <p><?= $produto['titulo'] ?></p>
                <h3 class="preco-tela-produtos">
                    R$ <?= $produto['preco'] ?>,00
                    <?php if ($produto['id'] != 1): ?>
                        <span class="frete-gratis"> (Frete Grátis)</span>
                    <?php endif; ?>
                </h3>
                <div>
                    <button type="submit" class="botao-comprar-tela-produto">Comprar</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
include_once('templates/footer.php');
?>