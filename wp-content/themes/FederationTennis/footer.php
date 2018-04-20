<?php global $mytheme;
//$copytext=redux_post_meta(THEME_OPT,$post->ID,'copy-text');?>
<!-- footer -->

<footer class="footer" role="contentinfo" style="background-color: <?php echo $mytheme['footer-background-img']['background-color'];?>">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center copy-text">
                    <?php echo $mytheme['copy-text'];?>
            </div>
            <div class="row">
                <div class="develop col-sm-12 text-center">
                   Develop by <a href="mailto:shcherbyna.ivan@gmail.com" title="Send mail">Shcherbyna Ivan©</a>
                </div>
            </div>

    </div>

</footer>
<!-- /footer footer-bg -->
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>
</body>

</html>
