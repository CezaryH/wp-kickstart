WP Kickstart
===============================================================================

Kickstart your WordPress site

[![Latest Stable Version](https://poser.pugx.org/wolfiezero/wp-kickstart/version.png)](https://packagist.org/packages/wolfiezero/wp-kickstart)
[![Download count](https://poser.pugx.org/wolfiezero/wp-kickstart/d/total.png)](https://packagist.org/packages/wolfiezero/wp-kickstart)



Installing
-------------------------------------------------------------------------------

To get started, first install composer globally by running the following.

    $ curl -sS https://getcomposer.org/installer | php
    $ mv composer.phar /usr/local/bin/composer

Then run the following remembering to change "folder" to where you want your
WordPress route to be.

    $ composer create-project wolfiezero/wp-kickstart folder

You will then have all the required WordPress files to start a project.


Configuring
-------------------------------------------------------------------------------

Due to the way this is setup, you will need to alter the `wp-config.php` file.

Open wp-config and edit the empty fields as you see fit; it's best to make this
your priority database file, so what ever you live sites settings are, do it
here. Then if you want a seperate database locally or working on a dev site run
the following

    $ mv wp-local-config-sample.php wp-local-config.php

You will now have a `wp-local-config.php` that will override the
`wp-config.php` file and apply some developer settings.


Changlog
-------------------------------------------------------------------------------

### 0.1.1 - 22/11/13

- fixed path error
- improved code comments
- removed excessive tabs

### 0.1.0 - 21/11/13

- initial release


Author(s)
-------------------------------------------------------------------------------

- Neil Sweeney <neil@wolfiezero.com>
