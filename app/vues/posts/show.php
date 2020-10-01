<?php
/*

      .app/vues/posts/index.php

*/
?>
<div class="post-details" data-id="<?php echo $post['id']; ?>">
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1 class="editable" data-type="text" data-field="titre"><?php echo $post['titre']; ?></h1>
            <h2 class="subheading editable" data-type="text" data-field="sousTitre"><?php echo $post['sousTitre']; ?></h2>
            <span class="meta">Posted on <?php echo date_format(date_create($post['datePublication']), "F d, Y"); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <!-- EDIT -->
          <div class="clearfix">
            <a class="btn btn-secondary" href="#">Edit Post &rarr;</a>
            <a class="btn btn-secondary" href="#">Delete Post &rarr;</a>
          </div>


          <!-- POST DETAILS -->
          <div class="editable" data-type="textarea" data-field="texte">
            <p><?php echo $post['texte']; ?></p>
          </div>


          <p>Placeholder text by
            <a href="http://spaceipsum.com/"><?php echo $post['prenom']; ?> <?php echo $post['nom']; ?></a>. Photographs by
            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
        </div>
      </div>
    </div>
  </article>

</div>
