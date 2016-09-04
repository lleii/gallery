
<?php include 'header.htm' ?>
     <div class="container">



<div class="row">

<div class="col-md-3">
           <!-- 
                <p class="lead">Shop Name</p>
                <div class="rsidebar">
                <div class="clearfix"> </div>
           -->

<div class="list-group">
  <a href="http://127.0.0.1/u/?cat=1" class="list-group-item active">3D Inkjet Tile</a>
  <a href="http://127.0.0.1/u/?cat=1&size=300x450mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 300x450mm</a>
  <a href="http://127.0.0.1/u/?cat=1&size=300x600mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 300x600mm</a>
</div>

<div class="list-group">
  <a href="http://127.0.0.1/u/?cat=2" class="list-group-item active">Ceramic Wall Tiles</a>
  <a href="http://127.0.0.1/u/?cat=2&size=150x150mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 150x150mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=200x200mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 200x200mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=200x300mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 200x300mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=250x330mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 250x330mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=250x400mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 250x400mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=300x450mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 300x450mm</a>
  <a href="http://127.0.0.1/u/?cat=2&size=300x600mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 300x600mm</a>
</div>

<div class="list-group">
  <a href="http://127.0.0.1/u/?cat=3" class="list-group-item active">Ceramic Floor Tiles</a>
  <a href="http://127.0.0.1/u/?cat=3&size=200x200mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 200x200mm</a>
  <a href="http://127.0.0.1/u/?cat=3&size=300x300mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 300x300mm</a>
  <a href="http://127.0.0.1/u/?cat=3&size=400x400mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 400x400mm</a>
  <a href="http://127.0.0.1/u/?cat=3&size=450x450mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 450x450mm</a>
  <a href="http://127.0.0.1/u/?cat=3&size=600x600mm" class="list-group-item">&nbsp; &nbsp; &nbsp; 600x600mm</a>
</div>

<div class="list-group">
  <a href="http://127.0.0.1/u/?cat=4" class="list-group-item active">Border Tile& Decor Piece</a>
</div>

</div> 

         <div class="col-md-9">

         <div class="row">
         
        <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>

                <?php foreach ($galleryArray['images'] as $image): ?>

                                <div class="col-md-3">
                                    <div class="thumbnail">


                        <a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" class="thumbnail" rel="colorbox">
                            <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" />
                        </a>

                              <div class="caption">
        <h3 style="text-align: center"><?php echo $image['file_title']; ?></h3>
      </div>


                                </div>
                                </div>

                <?php endforeach; ?>

        <?php endif; ?>

        </div>





        <?php if ($galleryArray['stats']['total_pages'] > 1): ?>

          <nav style="text-align: center">
                <ul class="pagination pagination-centered">
                    <?php foreach ($galleryArray['paginator'] as $item): ?>

                        <?php

                            switch ($item['class']) {

                                case 'title':
                                    $class = 'disabled';
                                    break;

                                case 'inactive':
                                    $class = 'disabled';
                                    break;

                                case 'current':
                                    $class = 'active';
                                    break;

                                case 'active':
                                    $class = NULL;
                                    break;

                            }

                        ?>

                        <li class="<?php echo $class; ?>">
                            <a href="<?php echo empty($item['href']) ? '#' : $item['href']; ?>"><?php echo $item['text']; ?></a>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </nav>

        <?php endif; ?>

         </div>


    </div>
</div>
<!---->
<?php include 'footer.htm' ?>

