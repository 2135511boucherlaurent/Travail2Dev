<?php get_header(); ?>

    <body>
        <div class="body">
            <div class="body-gauche"></div>

            <div class="body-centre">

                <div class="body-centre-1">
                    <div class="divider-1"></div>
                    <h3 id="titreh3" class="text-center">Formation PUB020&nbsp;: WordPress, 2023</h3>
                    <div class="divider-2"></div>

                    <div class="contenu">
                        <div class="bouton-developper">
                            <div class="bouton-developper-1">
                                <a id="developperreduire" href="#" class="bouton-developper-2" role="button" data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
                            </div>
                        </div>
                        <br>

                        <div class="information">

                            <?php if (have_posts()) : ?>

                                <?php while (have_posts()) : ?>

                                    <?php the_post(); ?>

                                    <div id="post">

                                        <?php the_title("<div class='form'>", '</div>'); ?>

                                        <?php if (comments_open() && get_comments_number() > 0) : ?>

                                            <ul>

                                                <?php $comments = get_comments(array('post_id' => get_the_ID())); ?>

                                                <?php foreach ($comments as $comment) { ?>

                                                    <?php echo "<p class='comment'>$comment->comment_content</p>"; ?>

                                                <?php } ?>

                                            </ul>

                                        <?php endif; ?>

                                    </div>

                                <?php endwhile; ?>

                            <?php else : ?>

                                <?php echo 'No posts found.'; ?>

                            <?php endif; ?>

                        </div>
                    </div>
                    <div id="bas-contenu"></div>
                </div>
                </div>
                </div>

                <div class="body-centre-2">
                    <div class="gros-divider-1"></div>
                </div>

                <div class="body-centre-3" id="centre-3">
                    <div class="pub">
                        <br>
                        <a id="texte-pub">Site fièrement hébergé chez A2 Hosting.</a>
                        <p></p>
                        <a id="image-a2hosting" href="https://www.a2hosting.com/?aid=5ca65a17be949&bid=ed1c4a67"><img src="https://affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="A2 Hosting, site d'hebergement"></a>
                    </div>
                </div>

                <div class="body-centre-4">
                    <div class="gros-divider-2"></div>
                </div>

            </div>

            <div class="body-droite"></div>

        </div>
    </body>

<?php get_footer(); ?>