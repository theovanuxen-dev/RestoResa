🍽️ RestoResa
RestoResa est une application web (fictive) de réservation de restaurants. Elle permet aux utilisateurs de découvrir, réserver et évaluer des établissements en quelques clics. 
"Le projet permet d’expérimenter les workflows de contribution, les pull requests, la gestion d’issues et le versionnement collaboratif, comme dans un environnement professionnel réel."


Pour bien démarrer
Ce guide te permettra d’exécuter une version locale du projet pour le développement et les tests.  
La section _Déploiement_ décrit comment mettre le projet en production.

Prérequis
Avant de cloner le projet, assure-toi d’avoir installé :
- Git
- Un éditeur de code (VS Code recommandé)
- Un navigateur moderne type Google Chrome 

Installation locale
1. Clone le dépôt sur ta machine :

```bash
git clone https://github.com/Berenice-Oravendis/restoresa.git 
cd restoresa
````

2. Installe les dépendances :
```bash
npm install
```

3. Démarre le serveur de développement :
```bash
npm run dev
```

4. L’application est accessible sur `http://localhost:3000`


Lancer les tests
*(à personnaliser selon la stratégie choisie)*

```bash
npm run test
```

Déploiement

Tu peux déployer RestoResa sur différents éléments dont :
* Serveur VPS (via FTP ou CI/CD)

> N'oublie pas de configurer tes variables d'environnement `.env`.

Contribuer
Merci de lire les fichiers suivants avant toute contribution :

* Contributing.md
* Code_of_conduct.md


Auteurs
* Berenice-Oravendis – Mainteneur principal
* Contributions bienvenues via pull requests !


Licence
Ce projet est sous licence MIT – voir le fichier "License" pour plus d'informations.

*RestoResa est un projet fictif à but pédagogique, développé dans le cadre de formations au développement web.*
