# B3 DEVIA – DOCKER
### Atelier Virtualisation – Conteneurs – DockerAtelier Virtualisation – Conteneurs – Docker
## Description de l’atelier
L’objectif de cet atelier est de comprendre le fonctionnement et l’intérêt de la technologie de conteneurisation
Docker.  
Cela passera par la conteneurisation d’une application web simple.  
L’application permet une gestion simplifiée de produits et est accessible sur le dépôt git suivant :  
https://gl.avalone-fr.com/anthony/gestion-produits
## Première phase : conteneurisation de l’application: conteneurisation de l’application
Vous devrez créer les fichiers Dockerfile permettant de construire l’image intégrant le code PHP et
l’image MySQL intégrant la création de la base de donnée à partir du fichier sql fourni dans le code.  
Les instructions spécifiques sont marquées dans le fichier README.md à la racine du dépôt.  
Vous pourrez dors et déjà essayer de faire fonctionner l’application en utilisant la commande docker run .  
## Deuxième phase : mise en place de Docker Compose: mise en place de Docker Compose
Créer le fichier Docker Compose afin de faciliter le build des deux images ainsi que leur utilisation aussi bien
pour un environnement de développement que pour la mise en production.  
## Troisième phase : mise en production: mise en production
Afin de faire tourner le container en production, un port standard doit être utilisé. Pour faciliter cette mise en
production, vous utiliserez les fonctionnalités de reverse proxy de Nginx que vous ferez tourner sur un
serveur Ubuntu 22.04 .  
Ainsi, l’application sera accessible par une url standard (port 80 ou 443) : http://application/  
## Quatrième phase : version de dev: version de dev
Comme précisé dans le README.md , l’application a été prévue pour fonctionner sur du MySQL 5.7 et PHP
5 .  
Testez l’utilisation de la dernière version de MySQL (8.0) et de PHP (8.3) en effectuant éventuellement
des modifications dans le code si nécessaire.  
Créez des containers pour ces versions et publiez-les sur le serveur de production (Ubuntu Server 22.04) en
rendant accessible l’application par l’adresse http://application-dev/ .  
## Remise du travail
Vous remettrez vos fichiers Dockerfile , Docker Compose et tout fichier servant à l’utilisation de vos
containers dans une archive. Vous y ajouterez un fichier texte décrivant rapidement la façon d’utiliser vos
containers.  
Date de remise : 19 janvier 2024  
Adresse e-mail : anthony@avalone-fr.com  
B3DEVIA – DOCKER – Atelier virtualisation, conteneurs, Docker 1/1  