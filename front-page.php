<?php

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<main class="home-casa-do-estudante">
	<img class="home-casa-do-estudante--img"
      src="<?php echo get_template_directory_uri() ?>/resources/img/fachada.png"
  />
  <img class="home-casa-do-estudante--img--bg"
      src="<?php echo get_template_directory_uri() ?>/resources/img/fachada-maior.png"
  />
  <div class="template-home__contents">
    <div class="box box-1">
      <div class="box-header">
        <h4>
          Sobre o financiamento
        </h4>
        <div>
          <?php require('resources/icons/arrow-home.svg'); ?>
        </div>
      </div>
      <div class="box-content">
        <p>
          Saiba como realizar doações financeiras para a Reforma. São diversas possibilidades de doação, para instituições privadas ou para pessoas físicas. O engajamento de todos é necessário para garantir um novo pacto pela permanência estudantil. Doe Por Uma Nova Casa!
        </p>
        <a href="https://casadoestudantehomolog.dreamhosters.com/sobre-o-financiamento/">
          Para doar, clique aqui!
        </a>
      </div>
    </div>
    <div class="box box-2">
      <div class="box-header">
        <h4>
          Sobre o projeto de reforma
        </h4>
        <div>
          <?php require('resources/icons/arrow-home.svg'); ?>
        </div>
      </div>
      <div class="box-content">
        <p>
          A Casa do Estudante é um edifício que abriga os estudantes pobres da Faculdade de Direito da USP, a principal instituição de ensino jurídico do país. Inaugurada em 1948, tem garantido o futuro acadêmico de alunos há mais de 70 anos. Agora, precisa da sua ajuda para garantir o futuro dos novos estudantes negros e pobres da USP.
        </p>
        <a href="https://casadoestudantehomolog.dreamhosters.com/sobre-o-projeto-de-reforma/">
          Saiba mais
        </a>
      </div>
    </div>
    <div class="box box-3">
      <div class="box-header">
        <h4>
          Histórico da Casa
        </h4>
        <div>
          <?php require('resources/icons/arrow-home.svg'); ?>
        </div>
      </div>
      <div class="box-content">
        <p>
          Conheça mais sobre a história da Casa do Estudante, uma instituição fruto do pensamento vanguardista de estudantes de Direito da USP e que vem, há 70 anos, permitindo que estudantes realizem o sonho de se tornarem franciscanos. 
        </p>
        <a href="https://casadoestudantehomolog.dreamhosters.com/sobre-a-casa-do-estudante/">
          Saiba mais
        </a>
      </div>
    </div>
    <div class="box box-4">
      <div class="box-header">
        <h4>
          Blog
        </h4>
        <div>
          <?php require('resources/icons/arrow-home.svg'); ?>
        </div>
      </div>
      <div class="box-content">
        <p>
          Acompanhe no nosso blog as últimas novidades sobre a reforma. Nele contaremos como está o andamento da obra e colocaremos diversos outros conteúdos relacionados à Casa do Estudante e aos doadores.
        </p>
        <a href="https://casadoestudantehomolog.dreamhosters.com/blog/">
          Saiba mais
        </a>
      </div>
    </div>
    <div class="box box-5 box-link">
      <div class="box-header">
        <a class=""href="https://casadoestudantehomolog.dreamhosters.com/faq/">
          <h4>
            FAQ
          </h4>
          <div>
            <?php require('resources/icons/arrow-home.svg'); ?>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>

<?php endwhile; ?>

<?php
get_footer();