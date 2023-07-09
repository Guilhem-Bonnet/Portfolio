# Portfolio
Ce projet est mon portfolio en ligne, présentant mes compétences, mes projets et mes coordonnées de contact. Vous pouvez le visiter [ici](https://srvdreamer.fr).

# Fonctionnalités
- Présentation de mes compétences et expériences professionnelles.
- Présentation de mes projets, avec des images et des descriptions détaillées.

# Technologies utilisées
- HTML, CSS, JavaScript, PHP
- Node.js pour les dépendances

# Installation
Pour installer le portfolio en local, vous pouvez cloner le dépôt en utilisant la commande suivante :
1. Clonez le repository sur votre machine locale en exécutant 
```bash
git clone https://github.com/Guilhem-Bonnet/Portfolio.git
```
2. Assurez-vous que vous avez **npm** et **Node.js** installés sur votre machine.
3. Exécutez **npm install** pour installer les dépendances.
 ```bash
npm install
```
4. Ouvrez **index.php** dans votre navigateur.

# Structure du projet
Le projet est organisé de la manière suivante :

```css


├── assets/
│   ├── content/
│   │   ├── details/
│   │   │   ├── project1/
│   │   │   │   ├── img/
│   │   │   │   ├── file_detail.txt
│   │   │   │   └── ...
│   │   │   ├── project2/
│   │   │   └── ...
│   │   └── ...
│   ├── scss/
│   ├── vendor/
|   ├── css/
│   │    ├── main.css
│   │    └── normalize.css
|   ├──img/
│   │   ├── background.jpg
│   │   ├── project-1.jpg
│   │   └── ...
│   └── js/
│       ├── main.js
│       └── vendor/
│       ├── jquery-3.6.0.min.js
│       └── ...
│
├── forms/
├── node_modules/
├── vendor/
├── index.php
├── donnees.json
├── error.php
├── footer.php
├── header.html
├── package.json
└── package-lock.json

```
**assets**: contient les fichiers CSS, JS, SCSS, les images, les fichiers de contenu et les fichiers de détails de projet.

**forms**: contient le fichier PHP pour le formulaire de contact.

**node_modules**: contient les dépendances de Node.js.

**vendor**: contient les dépendances tierces.

**donnees.json**: contient les données des projets.

**error.php**: page d'erreur personnalisée.

**footer.php**: pied de page personnalisé.

**index.php**: page d'accueil du site.

**package.json**: contient les informations de dépendance de Node.js.

**package-lock.json**: verrouillage de version de dépendance de Node.js.

# License
Le code source du portfolio est sous licence MIT. Voir le fichier LICENSE pour plus d'informations.
