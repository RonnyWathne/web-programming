Example PHP project using Smarty
================================

Installing Smarty
-----------------

  1. Download the [latest Smarty release](http://www.smarty.net/files/Smarty-stable.zip)
  2. Unzip it under your www-root For example `c:\wamp\www\Smarty-3.1.18`


Setting up the example project
------------------------------

The following is a brief description of how to get this example project up and running on a webserver.
For further information see the [Smarty Quick install page](http://www.smarty.net/quick_install). 

  1. We assume Smarty is installed in your www-root
  2. Copy/clone everything to the project directory (`project_dir`)
  3. Make sure the `smarty` directory has the following sub-directories 
     - `cache`
     - `configs`
     - `templates`
     - `templates_c`
  4. `smarty/cache` and `smarty/templates_c` need to be writeable by Apache (`chmod 755`)
  5. Set the Smarty and `PROJECT_DIR` paths in `index.php`
