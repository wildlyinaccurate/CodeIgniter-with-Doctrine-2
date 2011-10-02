<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code, pre {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

    code.inline {
        font-family: monospace;
        margin: 0;
        padding: 12px 4px 12px 4px;
        display: inline;
        border: none;
    }

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<h1>Welcome to CodeIgniter with Doctrine!</h1>

<p>This install of CodeIgniter with Doctrine 2 has been created and configured by Joseph Wynn from <a href="http://wildlyinaccurate.com/">Wildly Inaccurate</a>.</p>

<p>You can access the Doctrine EntityManager in your controllers through the Doctrine library:</p>
<code>$this->load->library('doctrine');<br />
$em = $this->doctrine->em;</code>

<p>Or through the shortcut property in MY_Controller:</p>
<code>$this->em;</code>

<p>A sample model has been created for you in:</p>
<code>application/models/User.php</code>

<p>The following code was used in the Welcome controller to create a new User entity.</p>
<code>$user = new models\User;<br />
$user->setUsername('josephwynn');<br />
$user->setPassword('Passw0rd');<br />
$user->setEmail('wildlyinaccurate@gmail.com');</code>

<p>Below is the output of print_r($user):</p>
<pre><?php print_r($user); ?></pre>

<p>The Doctrine console is ready for you to use. Just run <code class="inline"># ./application/doctrine</code> on Linux or <code class="inline"># php.exe ./application/doctrine.php</code> on Windows.</p>

<p>For more information about integrating Doctrine with CodeIgniter, read <em><a href="http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2/">Integrating Doctrine 2 with CodeIgniter 2</a></em>.</p>

<h2>Version Information</h2>
<pre>CodeIgniter <?php echo CI_VERSION; ?>

Doctrine <?php echo \Doctrine\Common\Version::VERSION; ?></pre>

<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>
