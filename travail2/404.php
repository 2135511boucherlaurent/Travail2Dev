<?php get_header(); ?>

<body>
    <div class="skip"></div>
    <div class="body-404">
        <div class="skip"></div>
        <h1 id="h1-404">Erreur 404</h1>
        <div class="skip"></div>
        <h3 id="h3-404">La page n'existe pas ou n'est pas accessible pour le moment</h3>
        <div class="skip"></div>
        <div class="bouton-404">
            <a href="<?php echo esc_url(home_url('/')); ?>">Retournez à l'accueil</a>
        </div>
        <div class="skip"></div>
    </div>
    <div class="skip"></div>
</body>

<?php get_footer(); ?>
