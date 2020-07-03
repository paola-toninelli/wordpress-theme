<?php
   $who_we_are= get_field('who_we_are');
   
   if($who_we_are):
   ?>
<section class="section section-who-we-are" id="chi-siamo">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 section-y-padding">
            <?php if(isset($who_we_are['title']) && $who_we_are['title'] ):?>
            <h2 class="text-primary text-uppercase"><?php echo $who_we_are['title'] ?></h2>
            <?php endif; ?>
            <?php if(isset($who_we_are['content']) && $who_we_are['content'] ):?>
            <div><?php echo $who_we_are['content'] ?></div>
            <?php endif; ?>
            <?php if(isset($who_we_are['call_to_action']) && $who_we_are['call_to_action'] ):?>
            <a href="<?php echo $who_we_are['call_to_action']['url'] ?>" target="<?php echo $who_we_are['call_to_action']['target'] ?>" class="btn btn-primary text-uppercase btn-lg rounded-0 mt-4"><?php echo $who_we_are['call_to_action']['title'] ?></a>
            <?php endif; ?>
         </div>
         <div class="col-12 col-md-6 d-none d-md-block">
            <?php
               if( isset($who_we_are['image']) && !empty($who_we_are['image']) ): 
                   $image = $who_we_are['image'];
                   $image_src = $image['sizes']['large'];
                   $image_srcset = wp_get_attachment_image_srcset( $image['id'], 'large' );
               ?>
            <img 
               class="img-who-we-are d-none d-md-block"
               src="<?php echo $image_src; ?>" 
               srcset="<?php echo $image_srcset; ?>"
               sizes="100vw"
               alt="<?php echo $image['alt'];?>">
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>