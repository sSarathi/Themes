
		<?php wp_footer(); ?>


		<div ng-app="">
			<input type="checkbox" ng-model="checked">toogle


			<footer class="site-footer" ng-hide="checked" >

				<div ng-hide="checked"><p><?php echo "sujoyTheme"; ?>-&copy;</p>
					<nav class="site-nav">
						  <?php $args=array(
				        	'theme_location' => 'Footer'
				      		); ?>
							<?php wp_nav_menu($args); ?>
					</nav>
				</div>		
			</footer>
		</div>		
	</body>
</html>