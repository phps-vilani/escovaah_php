<?php
include_once('templates/header.php');
?>
<div class="tela-produtos">
    <h2>CONFIRA NOSSOS PRODUTOS</h2>

    <div class="produtos-container">
        <?php foreach ($produtos as $produto): ?>
            <?php if ($produto['id'] <= 4): ?>
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
            <?php endif; ?>
            <?php if ($produto['id'] > 4): ?>

                <div class="tela-produtos-card-produto">
                    <img src="assets/outros_produtos/<?= $produto['image'] ?>" alt="">
                    <p><?= $produto['titulo'] ?></p>
                    <h3 class="preco-tela-produtos">
                        R$ <?= $produto['preco'] ?>,00
                        
                    </h3>
                    <div>
                        <button type="submit" class="botao-comprar-tela-produto">Comprar</button>
                    </div>
                </div>



                <!-- <div class="grid-produtos-descartaveis">
                    <div class="card-produto-descartaveis">
                        <img class="img-produto-descartavel" src="assets/outros_produtos/produto_8.jpg" alt="">
                        <div>
                            <p class="titulo-produto">PENTE CARBONO</p>
                        </div>
                        <div>
                            <h3 class="preco-produto">R$ 65,00</h3>
                        </div>
                        <div class="botao-comprar-produto">
                            <p>Comprar</p>
                        </div>
                    </div>
                    <div class="card-produto-descartaveis">
                        <img class="img-produto-descartavel" src="assets/outros_produtos/produto_9.jpg" alt="">
                        <div>
                            <p class="titulo-produto">PENTE PINCEL</p>
                        </div>
                        <div>
                            <h3 class="preco-produto">R$ 25,00</h3>
                        </div>
                        <div class="botao-comprar-produto">
                            <p>Comprar</p>
                        </div>
                    </div>
                    <div class="card-produto-descartaveis">
                        <img class="img-produto-descartavel" src="assets/outros_produtos/produto_10.jpg" alt="">
                        <div>
                            <p class="titulo-produto">CUMBUCA</p>
                        </div>
                        <div>
                            <h3 class="preco-produto">R$ 25,00</h3>
                        </div>
                        <div class="botao-comprar-produto">
                            <p>Comprar</p>
                        </div>
                    </div>
                </div> -->
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
include_once('templates/footer.php');
?>