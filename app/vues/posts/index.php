<?php
/*

      .app/vues/posts/index.php

*/
?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Textes -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="clearfix">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit placeat repudiandae maiores sequi nemo.</p>
            <p>Eveniet optio tempore beatae, nulla voluptatibus repudiandae, rem dolor, sunt neque perferendis pariatur.</p>
          </div>

          <!-- ADD A POST -->
          <div class="clearfix">
            <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
          </div>

          <!-- POSTS LIST -->
          <div id="liste-posts">
            <?php include '../app/vues/posts/liste.php'; ?>
          </div>


          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" id="older-posts" href="#">Older Posts &rarr;</a>
          </div>

        </div>
      </div>
    </div>
