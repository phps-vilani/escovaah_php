<?php
include_once('templates/header.php');

$state = null;
?>

<div class="tela-detalhes-usuario">
    <div>
        <p>Minha conta</p>
    </div>

    <div>
        <h2>Olá Guilherme, tudo bem?</h2>
    </div>

    <a href="<?= $BASE_URL ?>produtos.php">Ir para a tela de produtos! 👉🏻</a>

    <div class="row-cards-minha-conta">
        <div class="card-minha-conta">
            <img src="assets/shopping-cart.png" alt="">
            <span>Pedidos</span>
        </div>
        <div class="card-minha-conta">
            <img src="assets/pin.png" alt="">
            <span>Endereço</span>
        </div>
        <div class="card-minha-conta">
            <img src="assets/people.png" alt="">
            <span>Detalhes da conta</span>
        </div>
    </div>

    <?php if ($state == null || $state == ''): ?>

        <div class="conteudo-tela-detalhes-usuario">
            <p>(você não é Guilherme? <a href="<?= $BASE_URL ?>login.php">Logout</a>)</p>
        </div>

    <?php endif; ?>

    <?php if ($state == "orders"): ?>

        <h1>PEDIDOS</h1>
    <?php endif; ?>
    <?php if ($state == "address"): ?>

        <h1>ADRESS</h1>
    <?php endif; ?>
    <?php if ($state == 'detail-user'): ?>

        <h1>USER</h1>
    <?php endif; ?>
</div>





<?php
include_once('templates/footer.php');
?>