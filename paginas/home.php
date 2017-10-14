<!-- <div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
</div> -->
<section class="news">
  <div class="row">

    <?php 
    $news = $database->select("site_news", "*"); 
    foreach($news as $data):
      ?>

    <div class="col-md-12 content">
      <div class="col-md-2 col-sm-12"><img src="http://placehold.it/125x125" class="img-responsive"></div>
      <div class="col-md-10 col-sm-12">
        <h1><?= $data["title"]; ?></h1> 
        <p><?= $data["content"]; ?></p>
        <hr />
        <div class="info">
          <small><?= $data["date"]; ?></small>
        </div>
      </div>
    </div> 
  <?php endforeach; ?>



</div>
</section>  