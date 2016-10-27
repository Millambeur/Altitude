Altitude

=====================================================

INSTALLATION

1 - git clone https://github.com/Millambeur/Altitude.git
2 - bash : Altitude~ php composer.phar update
3 - bash : Altitude~ php bin/console doctrine:schema:update --dump-sql
4 - bash : Altitude~ php bin/console doctrine:schema:update --force
5 - bash : Altitude~ php bin/console assets:install --symlink
6 - bash : Altitude~ php bin/console assetic:dump --env=prod

CACHE CLEARING

7 - bash : Altitude~ php bin/console cache:clear --env=dev
8 - bash : Altitude~ php bin/console cache:clear --env=prod