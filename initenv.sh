# configurer l'environnement de PHP en ligne de commande pour faire
# fonctionner Symfony en dév en salles de TPs

# à "sourcer" via
#  $. ./initenv.sh

# Définition d'un fichier de configuration PHP alternatif
# vérification avec php -i | grep php.in
export PHPRC=$(pwd)/etc/php.ini
