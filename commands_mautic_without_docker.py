# WITHOUT DOCKER
install_plugins = "php bin/console mautic:plugins:install"

clear_cache = "bin/console cache:clear --env=prod"

clone_from_git = 'git clone -b beefree https://github.com/MarkBorodin/automationmonkeyassets.git'

cp_all_files = 'cp -r automationmonkeyassets/. /var/www/html/'

copy_beefree_bundle = 'cp -r ./MauticBeefreeBundle /var/www/html/plugins/'

copy_email_type_form = 'cp ./automationmonkeyassets/MauticBeefreeBundle/EmailType.php /var/www/html/app/bundles/EmailBundle/Form/Type/EmailType.php'

copy_page_type_form = 'cp ./automationmonkeyassets/MauticBeefreeBundle/PageType.php /var/www/html/app/bundles/PageBundle/Form/Type/PageType.php'

reload_plugins = 'bin/console mautic:plugins:reload'

schema_update = 'php bin/console doctrine:schema:update --force'

chown = 'chown -R www-data:www-data /var/www/html'
