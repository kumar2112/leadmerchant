<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Browse Category</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="row">
            <?php 
            if(count($categories)>0){
                foreach($categories as $category){
            ?>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo base_url('assets/')?>images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $category->getCategoryName(); ?></h3>
                            <h5 class="media-heading">
                                <span>Tags :</span>
                            </h5>
                            <p><a href="<?php echo site_url('leads/'.$category->getCategorySlug()) ?>">view leads</p>
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
            ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->