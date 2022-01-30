<?php get_header(); ?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-1'><?php the_title(); ?>!</h1>
            <?php the_content(); ?>

        <?php    }
    }?>

    <div class="podcast my-5">
        <h2 class='text-center'>Podcast</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'podcast',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $podcast = new WP_Query($args);

        if($podcast->have_posts()){
            while($podcast->have_posts()){
                $podcast->the_post();
                ?>

                <div class="col-3">
                    <figure>
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
                        </a>
                    </h4>
                </div>

           <?php }
        }

        ?>
      </div>
    </div>
</main>

<?php get_footer(); ?>