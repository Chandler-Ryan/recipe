<section class="container card-block">
    <div class="card">
        <div class="card-header text-center">
            <?= get_field( 'header' ) ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center"><?= get_field( 'body_title' ) ?></h5>
            <?php
                if( have_rows('list') ): ?>
                    <ul class="list-group">
                        <div class="row">
            <?php
                        while ( have_rows('list') ) : the_row();?>
                            <div class="col-md-4 d-flex align-items-strech">
                                <li class="list-group-item text-center w-100">
                                    <?= get_sub_field('list_item')?>
                                </li>
                            </div>
            <?php
                        endwhile; ?>
                        </div>
                    </ul>
            <?php
                else:

                // no rows found

                endif;
            ?>
        </div>

        <?php if( have_rows( 'carousel' ) ): $count=0; ?>
        <div id="carouselExampleSlidesOnly<?=$post_id . '-' . $block['id']?>" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php while ( have_rows('carousel') ) : the_row();?>
                <div class="carousel-item <?=$count==0 ? 'active' : '' ?>">
                    <img src="<?= get_sub_field('slide')['url'] ?>" class="card-img-bottom" alt="...">
                </div>
            <?php $count++; endwhile; ?>
            </div>
        </div>
        <?php endif;?>

    </div>
</section>