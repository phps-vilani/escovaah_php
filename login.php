<head>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<div class="tela-login">
    <div class="card-login">
        <img src="<?= $BASE_URL ?>assets/logo-login.png" alt="">

        <div class="form-login">
            <label for="">E-mail</label>
            <input type="text" placeholder="E-mail">

            <label for="">Senha</label>
            <input type="password" placeholder="Senha">
            <button type="button" onclick="alert('teste')" class="button-entrar">Acessar</button>
        </div>

        <div class="row-links">
            <a href="">Cadastre-se</a>
            <span>|</span>
            <a href="">Esqueci minha senha</a>
        </div>
    </div>
</div>