<div class="box">
	<h3>Bundled Tools</h3>

	<a class="button" href="//vvv.test/database-admin/" target="_blank">phpMyAdmin</a>
	<a class="button" href="//vvv.test/memcached-admin/" target="_blank">phpMemcachedAdmin</a>
	<a class="button" href="//vvv.test/opcache-status/opcache.php" target="_blank">Opcache Status</a>
	<?php
	if ( file_exists( '/usr/local/bin/mailhog' ) ) {
		?>
		<a class="button" href="http://vvv.test:8025" target="_blank">MailHog</a>
		<?php
	} else if ( file_exists( '/usr/local/rvm/bin/mailcatcher' ) ) {
		?>
		<a class="button" href="http://vvv.test:1080" target="_blank">Mailcatcher</a>
		<?php
	}
	?>
	<a class="button" href="//vvv.test/webgrind/" target="_blank">Webgrind</a>
	<a class="button" href="//vvv.test/phpinfo/" target="_blank">PHP Info</a>
	<a class="button" href="php-status?html&amp;full" target="_blank">PHP Status</a>
</div>
