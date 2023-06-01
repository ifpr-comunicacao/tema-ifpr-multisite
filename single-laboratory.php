<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("gov"); ?>
    <?php get_header();
    $campus_name = get_the_terms($post->ID, 'campus');
    $campus_slug = 'none';
    if (!empty($campus_name)) {
        $term = array_shift($campus_name);
        $campus_slug = $term->slug;
    }
    ?>
    <div class="container content">
        <div class="row">

            <!-- sidebar direito-->
            <?php get_template_part("sidebar_1"); ?>

            <!-- content -->
            <div id="content2" class="col-md-9">

                <!-- loop padrao -->
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="row cat-lab-topo-lab" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                            <?php else : ?>
                                <div class="row cat-lab-topo-lab" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/cat-lab/cat-lab-ifpr-capa.jpg' ?>');">
                                <?php endif; ?>
                                <p class="lab-entalhe"><a href="/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/">Catálogo de
                                        Laboratórios do IFPR</a></p>
                                </div>
                                <div class="row no-gutters">
                                    <p class="lab-legenda small"><?php the_post_thumbnail_caption(); ?></p>
                                    <article class="laboratorio-content col-md-9 pr-md-3">
                                        <p class="lab-campus-sobretitulo small"><?php echo $term->name; ?></p>
                                        <h1 class="lab-titulo"><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                <?php endwhile;
                        else :
                            get_template_part('partials/content', 'none');
                        endif; ?>
                                    </article>
                                    <!-- fim loop padrao -->

                                    <!-- sidebar esquerdo-->
                                    <aside class="col-md-3">

                                        <div>
                                            <!-- lista labs do campus -->
                                            <?php
                                            $args = array(
                                                'post_type'      => 'laboratory',
                                                'orderby'        => 'date',
                                                'order'          => 'ASC',
                                                'posts_per_page' => 8,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'campus',
                                                        'field'    => 'slug',
                                                        'terms'    => $campus_slug
                                                    ),
                                                ),
                                            );
                                            $loop_campus = new WP_Query($args);
                                            if ($loop_campus->have_posts()) : ?>
                                                <h3>Laboratórios de <?php echo $term->name; ?></h3>
                                                <ul class="cat-lab-menu-aside">
                                                    <?php
                                                    while ($loop_campus->have_posts()) : $loop_campus->the_post();
                                                        foreach (get_the_terms(get_the_ID(), 'campus') as $tax) : ?>
                                                            <li><a class="link-tax-area<?php echo $tax->name; ?>" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                                                    <?php
                                                        endforeach;
                                                    endwhile;
                                                    wp_reset_postdata(); ?>
                                                </ul>
                                                <!-- mais labs -->
                                                <p><a class="icone-mais" href="<?php echo get_home_url() ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/<?php echo $campus_slug; ?>/">Ver
                                                        todos</a></p>
                                            <?php
                                            endif; ?>
                                            <!-- fim lista labs do campus -->
                                        </div>
                                        <?php
                                        unset($term);
                                        unset($args);
                                        ?>

                                        <!-- lista labs de outros campi -->
                                        <div>
                                            <?php
                                            $area_name = get_the_terms($post->ID, 'area');
                                            $area_slug = 'none';
                                            if (!empty($area_name)) {
                                                $term = array_shift($area_name);
                                                $area_slug = $term->slug;
                                            }
                                            $args = array(
                                                'post_type'      => 'laboratory',
                                                'orderby'        => 'title',
                                                'order'          => 'ASC',
                                                'posts_per_page' => 8,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'area',
                                                        'field'    => 'slug',
                                                        'terms'    => $area_slug,
                                                    ),
                                                ),
                                            );
                                            $loop_area = new WP_Query($args);
                                            if ($loop_area->have_posts()) : ?>
                                                <?php if ($term->name == "Multidisciplinar") : ?>
                                                    <h3>Laboratórios <?php echo $term->name; ?>es do IFPR</h3>
                                                    <?else : ?>
                                                    <h3>Laboratórios de <?php echo $term->name; ?> do IFPR</h3>
                                                <?php endif ?>
                                                <ul class="cat-lab-menu-aside">
                                                    <?php
                                                    while ($loop_area->have_posts()) : $loop_area->the_post();
                                                        foreach (get_the_terms(get_the_ID(), 'campus') as $tax) :
                                                            $campus_name[] = $tax->name;
                                                        endforeach;
                                                    endwhile;
                                                    $campus_unicos = array_unique($campus_name);
                                                    sort($campus_unicos);
                                                    foreach ($campus_unicos as $campus) : ?>
                                                        <li><a href="<?php echo get_home_url() ?>/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/<?php echo sanitize_title($campus); ?>/"><?php echo $campus; ?></a></li>
                                                    <?php endforeach;
                                                    wp_reset_postdata(); ?>
                                                </ul>
                                                <!-- mais labs -->
                                                <p><a class="icone-mais" href="<?php echo get_home_url() ?>/area/<?php echo $area_slug; ?>/">Ver
                                                        todos</a></p>
                                            <?php
                                            endif; ?>
                                        </div>
                                        <!-- fim lista labs de outros campi -->
                                    </aside>
                                    <!-- fim sidebar eaquerdo-->


                                </div>
                            </div>

                            <?php get_footer(); ?>
            </div>
        </div>
</body>

</html>