ProudTheme
==========

A base theme with Bootstrap, the (ProudCity Pattern Library)[http://pattern.getproudcity.com] and Radix.

BUILD A THEME WITH DRUSH
----------------------------------
If you have drush and the zurb foundation theme enabled you can create a
subtheme easily with a drush.

The command to do this is simply:
  drush fst [THEMENAME] [Description !Optional]

MANUALLY BUILD A THEME
----------------------------------
 1. Setup the location for your new sub-theme.

    Copy the proud_subtheme folder out of the proudtheme/ folder and rename it to
    be your new sub-theme. IMPORTANT: The name of your sub-theme must start with
    an alphabetic character and can only contain lowercase letters, numbers and
    underscores.

    For example, copy the sites/all/themes/proudtheme/proud_subtheme folder and
    rename it as sites/all/themes/foo.

      Why? Each theme should reside in its own folder. To make it easier to
      upgrade Foundation, sub-themes should reside in a folder separate from the
      base theme.

 2. Setup the basic information for your sub-theme.

    In your new sub-theme folder, rename the proud_subtheme.info file to include
    the name of your new sub-theme. Then edit
    the .info file by editing the name and description field.

    For example, rename the foo/proud_subtheme.info file to foo/foo.info. Edit the
    foo.info file and change "name = ProudTheme Subtheme" to
    "name = Foo" and "description = Read..." to "description = A sub-theme".

      Why? The .info file describes the basic things about your theme: its
      name, description, features, template regions, CSS files, and JavaScript
      files. See the Drupal 7 Theme Guide for more info:
      http://drupal.org/node/171205

    Then, visit your site's Appearance page at admin/appearance to refresh
    Drupal 7's cache of .info file data.

 3. Edit your sub-theme to use the proper function names.

    Edit the template.php and theme-settings.php files in your sub-theme's
    folder; replace ALL occurrences of "proud_base" with the name of your
    sub-theme.

    For example, edit foo/template.php and foo/theme-settings.php and replace
    every occurrence of "proud_base" with "foo".

    It is recommended to use a text editing application with search and
    "replace all" functionality.

 5. Set your website's default theme.

    Log in as an administrator on your Drupal site, go to the Appearance page at
    admin/appearance and click the "Enable and set default" link next to your
    new sub-theme.


Optional steps:

 6. Further extend your sub-theme.

    Discover further ways to extend your sub-theme by reading
    Drupal 7's Theme Guide online at: http://drupal.org/theme-guide
