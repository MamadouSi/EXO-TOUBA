# EXO-TOUBA
# Guide de Déploiement Local de WordPress 🚀

Bienvenue dans ce guide pratique pour déployer localement un site WordPress en utilisant un fichier de base de données et le dossier du site.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [WordPress](https://wordpress.org/) : Téléchargez et installez la dernière version de WordPress.
- [Serveur Web](https://fr.wikipedia.org/wiki/Serveur_web) (par exemple, [XAMPP](https://www.apachefriends.org/index.html) ou [MAMP](https://www.mamp.info/)) : Utilisez un serveur web pour exécuter votre site localement.
- Éditeur de Texte (comme [Visual Studio Code](https://code.visualstudio.com/)) : Facilite la modification des fichiers de configuration.

## Étapes de Déploiement

### 1. Importation de la Base de Données

- Utilisez votre outil de gestion de bases de données préféré (par exemple, [phpMyAdmin](https://www.phpmyadmin.net/)) pour créer une nouvelle base de données.

- Importez le fichier de base de données fourni (`votre_base_de_donnees.sql`) dans la base de données nouvellement créée.

### 2. Configuration de WordPress

- Naviguez jusqu'au dossier où vous avez installé WordPress.

- Copiez le fichier `wp-config-sample.php` et renommez la copie en `wp-config.php`.

- Ouvrez `wp-config.php` dans votre éditeur de texte et configurez les paramètres de base de données (DB_NAME, DB_USER, DB_PASSWORD, etc.) en fonction de votre configuration.

### 3. Copie du Site dans le Dossier www

- Copiez tous les fichiers du site WordPress dans le dossier racine de votre serveur web (habituellement situé dans le dossier `www` ou `htdocs`).

### 4. Démarrage du Serveur Web

- Démarrez votre serveur web (XAMPP, MAMP, etc.).

### 5. Accédez à votre Site Localement

- Ouvrez votre navigateur web et accédez à l'adresse : `http://localhost/nom_du_dossier_wordpress`.

Voilà ! Votre site WordPress devrait maintenant être accessible localement.

## Problèmes Connus

Si vous rencontrez des problèmes lors du déploiement, consultez la documentation officielle de WordPress ou les forums d'aide en ligne.

## Contribuer

Si vous avez des suggestions d'amélioration ou avez trouvé des bugs, n'hésitez pas à contribuer en ouvrant une issue ou une pull request.

Happy coding! 👩‍💻👨‍💻
