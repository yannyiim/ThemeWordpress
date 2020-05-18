<?php get_header(); ?>

<main>

    <?php get_sidebar( ); ?>

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                
                <div class="justify-content-center">

                    <img src="https://wpengine.com/wp-content/uploads/2018/09/change-theme-resource1.png" alt="Image d'exemple" class="img-example">

                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="text-center">
                    <h2>Lorem ipsum dolor...</h2>
                </div>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>            
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2>Articles du blog</h2>
        </div>

        <hr>

        <div class="row-extended">

            <?php while(have_posts(  )) : the_post(  ); ?>

            <article class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                <div class="card" style="width:100%; background-color: transparent; border-color: #F06449" >
                    
                    <img class="card-img-top" src="..." alt="Card image cap">
      
                    <a href="<?php the_permalink( ); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>
                        <p class="card-text"><?php the_tags(); ?></p>
                        <p class="card-text">Date : <?php the_time('d/m/Y'); ?></p>
                        <p class="card-text"> <?php the_excerpt()?></p>
                        <a href="<?php the_permalink( ); ?>" class="btn btn-primary">Lire</a>
                    </div>

                </div>

             </article>    

            <?php endwhile ?>

        </div>

    </div>

</main>

<?php get_footer(); ?>

