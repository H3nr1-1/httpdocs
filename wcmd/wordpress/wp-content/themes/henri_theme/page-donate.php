<?php
get_header();
?>
<div class="main-content">
    <main>
        <ol class="cards">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="card">
                        <div>
                            <figure class="card-figure">
                                <?php the_post_thumbnail('card'); ?>
                            </figure>

                            <?php if (function_exists('bcn_display')) { ?>
                                <div>
                                    <p><?php bcn_display(); ?></p>
                                </div>
                            <?php } ?>

                            <section class="card-section">
                                <h2 class="card-section-title"><?php the_title(); ?></h2>

                                <?php if ($post->post_excerpt) { ?>
                                    <div class="tagline"><?php the_excerpt(); ?></div>
                                <?php } ?>

                                <div class="card-section-meta">
                                    <time class="card-section-meta-date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('l, d F Y') ?></time>
                                    <span class="card-section-meta-author">By: <?php the_author(); ?></span>
                                </div>
                                <div class="card-section-excerpt">
                                    <?php the_content(); ?>
                                </div>

                            </section>

                            <?php
                            if (null !== get_post_custom_values('colors')) {
                                echo "<pre style=\"border:1px solid #ccc;box-shadow:0px 1px 2px 1px #444;position:relative;z-index:999;width:1000px;padding:10px;line-height:26px;font-size:24px;background:white;color:blue\">";
                                $wcmd_theme_colors = get_post_custom_values('colors');
                                // Show the values in the array
                                print_r($wcmd_theme_colors);

                                echo PHP_EOL . '$colors_array = explode(", ", $wcmd_theme_colors[0]);' . PHP_EOL;

                                $colors_array = explode(", ", $wcmd_theme_colors[0]);
                                print_r($colors_array);
                                echo "</pre>";

                                echo "<br><hr>";
                                list($red, $white, $blue) = explode(", ", $wcmd_theme_colors[0]);
                                echo '<h2>List Elements From $colors_array</h2>';
                                echo "<p>Array Element 0: " . $red . "</p>";
                                echo "<p>Value Element 1: " . $white . "</p>";
                                echo "<p>Value Element 2: " . $blue . "</p>";

                                echo "<hr>";
                            }

                            if (get_post_custom_values('goal') != "") {

                                setlocale(LC_MONETARY, 'en_US');

                                $wcmd_theme_goal = get_post_custom_values('goal');
                                $wcmd_theme_current_figure = get_post_custom_values('current_figure');

                                $wcmd_theme_donation_diff = $wcmd_theme_goal[0] - $wcmd_theme_current_figure[0];
                                echo '<h1>We are only $ ';
                                echo number_format($wcmd_theme_donation_diff, 2);
                                echo ' away from our $ ';
                                echo number_format($wcmd_theme_goal[0], 2);
                                echo ' goal.<br><a href="">Donate Today!</a></h1>';
                            }
                            ?>
                        </div>
                    <?php endwhile;
            else: ?>
                    <section class="card-section">
                        <p class="card-section-excerpt"><?php _e('Sorry, no posts matched your criteria!'); ?></p>
                    </section>
                <?php endif; ?>
                    </li>
        </ol>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>