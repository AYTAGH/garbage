<div class="container">
  <section id="photostack-1" class="photostack">
    <div>
      
      <?php foreach(page('projects')->children()->visible() as $project): ?>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <figure>
        <a href="" class="photostack-img"><img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>"/></a>
        <figcaption>
          <h1 class="photostack-title"><?php echo $project->title()->html() ?></h1>
        </figcaption>
      </figure>
      <?php endif ?>
      <?php endforeach ?>
    </div>
  </section>
</div>