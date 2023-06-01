<!DOCTYPE html>
<?php get_template_part("head"); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("gov"); ?>
    <?php get_header(); ?>
    <?php $current_term = single_term_title("", false); ?>
    <?php $this_slug = sanitize_title($current_term); ?>
    <div id="page" class="container content">
        <div class="row">
            <!-- start sidebar -->
            <?php get_template_part("sidebar_1"); ?>
            <div id="content2" class="col-md-9">

                <div class="row area-pic cat-lab-topo-area area-<?php echo $this_slug; ?>">
                    <p class="lab-entalhe">
                        <a href="/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/">Catálogo de Laboratórios do IFPR</a>
                    </p>
                    <h1 class="cat-lab-page-title icone-area">
                        <?php echo $current_term; ?>
                    </h1>
                </div>
                <div class="cat-lab-sobre">
                    <p class="cat-lab-cover d-flex"><a href="/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/" data-type="URL" data-id="/pesquisa-e-publicacoes/laboratorios/catalogo-de-laboratorios/">Capa do Catálogo</a></p>
                    <p class="sobre d-flex"><a href="#">Sobre</a></p>
                </div>
                <div>
                    <div class="lab-campus-areas mt-3">

                        <?php
                        $page_name = get_the_title();
                        $args = array(
                            'post_type' => 'laboratory',
                            'orderby' => 'name',
                            'order'     => 'ASC',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'area',
                                    'field'    => 'slug',
                                    'terms'    => $this_slug
                                ),
                            ),
                        );
                        ?>

                        <?php
                        // the area query
                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                            <!-- loop Area -->
                            <?php $areas = array(); ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php foreach (get_the_terms(get_the_ID(), 'campus') as $tax) : ?>
                                    <?php $areas[] = $tax->name; ?>
                                <?php endforeach; ?>
                        <?php endwhile;
                        endif; ?>
                        <?php $areas_unicas = array_unique($areas); ?>
                        <?php sort($areas_unicas); ?>
                        <!-- loop Area fim -->
                        <!-- Lab loop -->
                        <?php foreach ($areas_unicas as $lab_area) : ?>
                            <div class="lab-area">
                                <?php $template_url = get_template_directory_uri(); ?>
                                <button class="cat-lab-btn fechado card-<?php echo sanitize_title($lab_area); ?>">
                                    <img src="<?php echo $template_url; ?>/assets/images/cat-lab/angle-up-solid.svg" class="btn-slide">
                                    <?php echo '<h3 class="cat-lab-card-title">' . __($lab_area) . '</h3>'; ?>
                                </button>
                                <?php $args_labs = array(
                                    'post_type' => 'laboratory',
                                    'order'     => 'ASC',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'area',
                                            'field'    => 'slug',
                                            'terms'    => $current_term
                                        ),
                                        array(
                                            'taxonomy' => 'campus',
                                            'field'    => 'slug',
                                            'terms'    => $lab_area
                                        ),
                                    ),
                                );
                                $the_lab_query = new WP_Query($args_labs); ?>
                                <?php if ($the_lab_query->have_posts()) : ?>
                                    <ul class="cat-lab-list">
                                        <?php while ($the_lab_query->have_posts()) : $the_lab_query->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php else : ?>
                                    <p><?php _e('Desculpe, nenhum laboratório com esses critérios.'); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        <!-- Lab loop -->
                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
            <?php get_footer(); ?>
        </div>
    </div>
</body>

</html>