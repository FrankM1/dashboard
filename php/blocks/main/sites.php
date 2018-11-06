<?php

function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );

    return $length === 0 || 
    ( substr( $haystack, -$length ) === $needle );
}

?>
<div class="grid50">
	<?php
	
	// 6 levels up 

	$parent = dirname(dirname(dirname(dirname( dirname(__DIR__) ) ) ) );

	$scandir = scandir( $parent );

	foreach ( $scandir as $site ) {

		if ( $site === '.' || $site === '..' || $site === 'dashboard' || $site === 'vvv'  || substr($site, 0, 1) === '.' || substr($site, 0, 1) === '@' || substr($site, 0, 4) === '_vti') {
			continue;
		}

		$classes = [];
		$description = 'A WordPress installation';
		if ( 'wordpress-default' === $site ) {
			$description = 'WordPress stable';
		} else if ( 'wordpress-develop' === $site ) {
			$description = 'A dev build of WordPress, with a trunk build in the <code>src</code> subfolder, and a grunt build in the <code>build</code> folder';
		}
		?>
		<div class="box <?php echo strip_tags( implode( ',', $classes ) ); ?>">
			<h4><?php
			echo strip_tags( $site );
			?></h4>
			<p><strong>URL:</strong> <?php
				?>
				<a href="<?php echo 'http://'.$site; ?>.test" target="_blank"><?php echo 'http://'.$site; ?>.test</a>,
			<br/>
			<strong>Folder:</strong> <code><?php echo dirname(dirname(dirname(dirname(dirname(__DIR__))))) . '/' . strip_tags( $site ); ?></code></p>
		</div>
		<?php
	}
	?>
</div>