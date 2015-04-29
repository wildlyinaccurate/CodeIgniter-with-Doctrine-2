## CodeIgniter with Doctrine

This is a simple [CodeIgniter](http://codeigniter.com/) installation with [Doctrine 2](http://www.doctrine-project.org/). It contains sample models in `application/models/Entity` and usage examples in `application/controllers/welcome.php`.

The `master` branch contains an installation of CodeIgniter 3. You can find the CodeIgniter 2 version of this repository in the `codeigniter-2` branch.

### Dev Mode

Dev mode is disabled by default, but you can enable it by setting `$dev_mode = true;` in `application/libraries/Doctrine.php`. This will auto-generate proxies and use a non-persistent cache (`ArrayCache`). Remember to turn dev mode off for production!

For more information on how to configure Doctrine, read [Integrating Doctrine 2 with CodeIgniter 2](http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2)
