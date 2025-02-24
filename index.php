<?php
include_once("templates/header.php");
?>
<!-- Slideshow container -->
<swiper-container class="mySwiper" pagination="false" effect="coverflow" grab-cursor="true" centered-slides="true"
  slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="200"
  coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
  <swiper-slide class="swiper">
    <div class="card">
      <div class="sliderText">
        <img src="assets/caroussel_image_1.jpg" alt="">
      </div>
    </div>
  </swiper-slide>
  <swiper-slide class="swiper">
    <div class="card">
      <div class="sliderText">
        <img src="assets/caroussel_image_2.jpg" alt="">
      </div>
    </div>
  </swiper-slide>
  <swiper-slide class="swiper">
    <div class="card">
      <div class="sliderText">
        <img src="assets/caroussel_image_3.jpg" alt="">
      </div>
    </div>
  </swiper-slide>
</swiper-container>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<p class="titulo-produtos-destaque">PRODUTOS EM DESTAQUE</p>

<div class="grid-produtos">
  <div class="card-produto">
    <img class="img-produto" src="assets/produtos_escova_ah/produto_1.jpg" alt="">
    <div>
      <p class="titulo-produto">PROGRESSIVA ESCOVA AH 1L</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 447,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
  <div class="card-produto">
    <img class="img-produto" src="assets/produtos_escova_ah/produto_2.jpg" alt="">
    <div>
      <p class="titulo-produto">KIT COM 2 ESCOVA AH</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 855,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
</div>
<div class="grid-produtos">
  <div class="card-produto">
    <img class="img-produto" src="assets/produtos_escova_ah/produto_3.jpg" alt="">
    <div>
      <p class="titulo-produto">KIT COM 3 ESCOVA AH</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 1221,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
  <div class="card-produto">
    <img class="img-produto" src="assets/produtos_escova_ah/produto_4.jpg" alt="">
    <div>
      <p class="titulo-produto">KIT COM 4 ESCOVA AH</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 1548,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
</div>

<!-- produtos pincel, escova ... -->

<div class="grid-produtos-descartaveis">
  <div class="card-produto-descartaveis">
    <img class="img-produto-descartavel" src="assets/outros_produtos/produto_5.jpg" alt="">
    <div>
      <p class="titulo-produto">KIT COMPLETO</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 150,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
  <div class="card-produto-descartaveis">
    <img class="img-produto-descartavel" src="assets/outros_produtos/produto_6.jpg" alt="">
    <div>
      <p class="titulo-produto">KIT CUMBUCA PINCEL</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 40,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
  <div class="card-produto-descartaveis">
    <img class="img-produto-descartavel" src="assets/outros_produtos/produto_7.jpg" alt="">
    <div>
      <p class="titulo-produto">ESCOVA INTELIGENTE</p>
    </div>
    <div>
      <h3 class="preco-produto">R$ 65,00</h3>
    </div>
    <div class="botao-comprar-produto">
      <p>Comprar</p>
    </div>
  </div>
</div>
<div class="grid-produtos-descartaveis">
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
</div>

<p class="titulo-perguntas-frequente">PERGUNTAS FREQUENTES</p>

<!-- FAQ -->
<div class="faq">

  <div class="faq-item">
    <h3>Para quem é e para qual finalidade?</h3>
    <p>HTML é a linguagem de marcação utilizada para criar páginas na web.</p>
  </div>

  <div class="faq-item">
    <h3>Contraindicações e formas de uso.</h3>
    <p>CSS é a linguagem usada para estilizar elementos HTML.</p>
  </div>

  <div class="faq-item">
    <h3>Que tipo de resultado é possível ter com a Escova AH?</h3>
    <p>JavaScript é uma linguagem de programação que permite adicionar interatividade às páginas web.</p>
  </div>

  <div class="faq-item">
    <h3>Tem garantia e suporte?</h3>
    <p>JavaScript é uma linguagem de programação que permite adicionar interatividade às páginas web.</p>
  </div>

  <div class="faq-item">
    <h3>Qual o rendimento e como posso faturar com a Escova AH?</h3>
    <p>JavaScript é uma linguagem de programação que permite adicionar interatividade às páginas web.</p>
  </div>
  <div class="faq-item">
    <h3>Quais são os componentes e ativos da Escova AH?</h3>
    <p>JavaScript é uma linguagem de programação que permite adicionar interatividade às páginas web.</p>
  </div>
</div>

<script>
  document.querySelectorAll('.faq-item h3').forEach(item => {
    item.addEventListener('click', () => {
      const parent = item.parentElement;
      parent.classList.toggle('active');
    });
  });
</script>

<?php
include_once("templates/footer.php");
?>