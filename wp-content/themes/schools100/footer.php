    <div class="dmbs-footer">
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="row dmbs-author-credits">
                    <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
                </div>
        <?php endif; ?>
    </div>
	<div id="scroll-up"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>

</html>