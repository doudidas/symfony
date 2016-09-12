#!/bin/sh

# Prépare l'environnement PHP nécessaire pour Symfony
#  Modifications effectuées :
#   - définition de date.timezone = "Europe/Paris"
#
# L'environnement est destiné à être défini via l'emplacement d'un
# php.ini custom dans la variable PHPRC. Voir initenv.sh pour cela

current_ini=$(php -i 2>/dev/null| grep php.ini | grep 'Loaded Configuration File' | sed 's/.*=> //g')

mkdir -p etc

if [ -f etc/php.ini ]; then
    echo "Erreur : fichier php.ini déjà présent dans etc/" >&2
fi

sed 's/;date\.timezone =.*$/date.timezone = "Europe\/Paris"/' $current_ini > etc/php.ini

new_ini=$(PHPRC=$(pwd)/etc/php.ini php -i 2>/dev/null| grep php.ini | grep 'Loaded Configuration File' | sed 's/.*=> //g')

if [ "x$new_ini" != "x$current_ini" ]; then
    echo "Généré $new_ini"
fi

