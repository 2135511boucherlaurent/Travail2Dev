<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="wp-content/themes/travail2/style.css" />

    <?= wp_head(); ?>

</head>


    <header>
        <div class="header">
            <div class="haut-header">
                <div class="gauche">
                </div>
                <div class="centre">
                    <a id="image-apical" href="https://apical.xyz"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage"></a>
                </div>
                <div class="droite">
                    <div id="icones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a>
                        <a><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a>
                        <a id="authentification" href="<?php echo esc_url(home_url('/')); ?> /wp-admin"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title=""></a>
                        <a href="<?php echo wp_logout_url(esc_url(home_url('/')) . '/wp-admin'); ?>"></a>
                    </div>
                </div>
            </div>

            <nav class="bas-header">
                <div class="container" id="container-haut">
                    <div class="titre">

                    <?php $pages = get_pages(); ?>

                    <?php if($pages) : ?>

                            <?php foreach ($pages as $page) : ?>

                                <?php if (strpos($page->post_title, 'marker') === false && strpos($page->post_title, 'Pages') === false) { ?>

                                <div class="nav-item">
                                    <a href="<?php echo get_permalink($page->ID); ?>"><?php echo esc_html($page->post_title); ?></a>
                                </div>

                            <?php } ?>

                            <?php endforeach; ?>

                    <?php endif; ?>

                    </div>
                </div>
            </nav>
        </div>
    </header>