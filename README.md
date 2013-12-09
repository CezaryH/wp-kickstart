WP Kickstart
===============================================================================

Kickstart your WordPress site

[![Latest Stable Version](https://poser.pugx.org/wolfiezero/wp-kickstart/version.png)](https://packagist.org/packages/wolfiezero/wp-kickstart)
[![Download count](https://poser.pugx.org/wolfiezero/wp-kickstart/d/total.png)](https://packagist.org/packages/wolfiezero/wp-kickstart)



Installing
-------------------------------------------------------------------------------

To get started, first install [Composer](http://getcomposer.com/) by running
the following.

    $ curl -sS https://getcomposer.org/installer | php

You can make it run globally by also then running.

    $ mv composer.phar /usr/local/bin/composer

Then run the following remembering to change "folder" to where you want your
WordPress route to be.

    $ composer create-project wolfiezero/wp-kickstart folder

(Note, if you are running Composer locally change `composer` to `php
composer.phar`).

You will then have all the required WordPress files to start a project.


Configuring
-------------------------------------------------------------------------------

Due to the way this is setup, you will need to alter the `wp-config.php` file.

Open wp-config and edit the empty fields as you see fit; it's best to make this
your priority database file, so what ever you live sites settings are, do it
here. Then if you want a seperate database locally or working on a dev site run
the following

    $ cp wp-local-config-sample.php wp-local-config.php

You will now have a `wp-local-config.php` that will override the
`wp-config.php` file and apply some developer settings.


Adding Plugins
-------------------------------------------------------------------------------

You can manage all your plugins that are from the [WordPress Plugin Directory](http://wordpress.org/plugins/)
via composer.

To add a new required plugin then go into the `composer.json` file and you
should see a section that looks some what like this:

    ...
    "require": {
        "johnpbloch/wordpress": "*",
        "wpackagist/wp-super-cache": "*",
        "wpackagist/wordpress-importer": "*",
        "wpackagist/google-analytics-for-wordpress": "*"
    },
    ...

Here you can add your reuired plugin. So if I wanted to add the [Better WP
Security](http://wordpress.org/plugins/better-wp-security/) plugin, I would
grab the slug of that plugin, which is `better-wp-security`, and affix that to
the `wpackagist/` slug to make `wpackgist/better-wp-security`.

    ...
    "require": {
        "johnpbloch/wordpress": "*",
        "wpackagist/wp-super-cache": "*",
        "wpackagist/wordpress-importer": "*",
        "wpackagist/google-analytics-for-wordpress": "*",
        "wpackgist/better-wp-security": "*"
    },
    ...

The `"*"` is to specify the latest verison, you can change that to the version
number you will always require, but probably best just leave as is.

You can read more about how the composer.json file works in [the docs](http://getcomposer.org/doc/).

### Custom Plugin

If you created a plugin that is only required for that project and isn't a
public repo or require it's own repo, then you will need to edit `/.gitignore`
file. By default it ignores all folders in the plugin directory; as you will
want to version your plugin along with the main project you will need to add
the following line for each new plugin in the section heading
`# Don't ingore the following`.

    !/content/plugins/[plugin-slug]/

Where it says "`[plugin-slug]`"" you should replace that with your plugin's
folder name.


Changlog
-------------------------------------------------------------------------------

### 0.1.3 - 09/12/13

- Added "root-relative-urls" plugin to default plugins (sites will be more
  portable by not allowing WordPress to use the domain for interal images)

### 0.1.2 - 28/11/13

- Updated README with info about plugins
- Change the .gitignore for plugins to the root .gitignore (and made it pretty)
- Removed `en_GB` from `WPLANG`

### 0.1.1 - 22/11/13

- fixed path error
- improved code comments
- removed excessive tabs

### 0.1.0 - 21/11/13

- initial release


Author(s)
-------------------------------------------------------------------------------

- Neil Sweeney <neil@wolfiezero.com>
