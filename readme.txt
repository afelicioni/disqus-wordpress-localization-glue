=== Disqus Localization Glue ===
Contributors: afelicioni
Tags: disqus, localization, translation, language
License: GPL
License URI: https://github.com/afelicioni/disqus-wordpress-localization-glue/blob/master/disqus-wordpress-localization-glue/LICENSE

Allows Disqus widget language to be customized using a light conversion table, according to currently used Wordpress locale setup.

== Description ==
A raw method to let Disqus widget embedded in WordPress to use the translated string according to core software localization. Some of the key strings for locale are not the same, so this class is a sort of helper to bridge the gap between differences and allow widget to display the same or closest language in use by Wordpress.

This package is also available on GitHub, have a look at https://github.com/afelicioni/disqus-wordpress-localization-glue/blob/master/disqus-wordpress-localization-glue/README.md for  full detailed experience.

== Installation ==
Very light plugin, easy and quick to install, no hard setup needed.

1. Upload plugin folder into the used one by your plugins, ex. `/wp-content/plugins/`
2. Activate the plugin through the \'Plugins\' menu in WordPress

== Frequently Asked Questions ==
Q: How this plugin can be helpful?
A: For example, embedding Disqus widget for german setups will happen to still display in english, since Wordpress localization key is \"de_DE\" while Disqus uses \"de\". So, this plugin will return the right key and deliver the correct customization code.
