<?php
$page_hero= get_field('page_hero');

if($page_hero):
?>

<section class="section page-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center page-hero-content d-flex justify-content-center align-items-center">
              <div>
                <h1 class="text-white text-uppercase">
                            <?php 
                            if( isset ($page_hero['title'])&& $page_hero['title'] ){ 
                                echo $page_hero['title']; 
                            } else {
                                the_title();
                            }
                            ?>
                        </h1>

                        <?php if(isset ($page_hero['content'])&& $page_hero['content']):?>
                            <p class="text-white"><?php echo $page_hero['content']?></p>
                        <?php endif; ?>
                        <?php if(isset ($page_hero['call_to_action'])&& $page_hero['call_to_action']):?>
                            <a href="<?php echo $page_hero['call_to_action']['url'] ?>" target="<?php echo $page_hero['call_to_action']['target'] ?>" class="btn btn-primary btn-lg text-uppercase rounded-0"><?php echo $page_hero['call_to_action']['title'] ?></a>
                        <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php endif;?>