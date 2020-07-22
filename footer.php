<!-- ajout d'un menu de personnalisation du footer -->
<footer class="site__footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
</footer>
  
<?php wp_footer(); ?>
  <!-- On peut ajouter le script Google Analytics ici -->
</body>
</html>