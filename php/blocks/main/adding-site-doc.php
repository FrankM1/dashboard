<div class="box alt-box">
	<h3>Adding a New Site</h3>
	<p>Modify <code>vvv-custom.yml</code> under the sites section to add a site, here's an example:</p>
<pre>
  newsite:
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template
    description: "A WordPress subdir multisite install"
    skip_provisioning: false
    hosts:
      - newsite.test
    custom:
      wp_type: subdirectory
</pre>
	<p>This will create a site in <code><?php echo dirname(dirname(dirname(dirname(dirname(__DIR__))))); ?>/newsite</code> at <code>http://newsite.test</code></p>
</div>