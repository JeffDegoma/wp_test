<footer class="site-footer">

        <?
            $args = array('theme_location' => 'footer')
        ?>

        <nav class="site-nav-footer">
            <?php wp_nav_menu($args);?>
        </nav>


    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>


</div>
<?php wp_footer();?>
    
</body>
</html>