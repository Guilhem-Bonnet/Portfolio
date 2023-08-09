# FlipperVR

## Les prémices

Le projet FlipperVR a commencé en 2019, alors que j'étais en alternance dans l'entreprise. Mon premier projet de recherche et développement(R&D) en réalité virtuelle consistait à créer un flipper physique associé à la technologie VR.

J'ai débuté le projet en me plongeant dans l'univers des flippers, en étudiant leur communauté et leur vocabulaire, et en effectuant une veille informatique sur le matériel nécessaire à la fabrication. Les pincabs nous ont été d'une grande aide, car leur fonctionnement sur PC a simplifié l'adaptation de la technologie de flipper physique vers PC.

J'ai commencé en récupérant un asset de flipper proposé par l'entreprise sur lequel j'ai modifié les inputs/output pour y connecter notre nouveau matériel. Toutefois, j'ai rapidement rencontré des problèmes, notamment avec des algorithmes qui n'étaient pas assez rapides ou mal optimisés. Pour éviter toute sensation de "latence" en jeu, il était impératif que l'envoi d'informations de l'hardware se fasse instantanément.

Notre asset n'était pas optimisé et consommait beaucoup de ressources. Le code était lourd et n'était pas maintenable ni adaptable. J'ai dû trouver une solution pour calibrer le flipper physique en VR sans qu'il ne bouge. J'ai également découvert que les systèmes de tracking des casques n'étaient pas encore au point à l'époque (de 2019 à 2022) et qu'il était souvent nécessaire de recréer une zone "gardian".

Nous avons rencontré des problèmes avec Unity avec des solutions souvent incongrues. De plus, la collaboration en équipe et le versionnage ont été difficiles lorsque des membres du pôle WEB compétents sur Unity venaient m'assister sur le projet et que nous utilisions le "collab" (système natif de Unity).

En tant qu'apprenti en première année d'alternance (Bac+3), je n'avais pas encore les connaissances nécessaires en DevOps, git/gitea, agilité ou en termes de gestion de temps pour mettre en place ces pratiques et notions qui me semblent aujourd'hui indispensables pour tout projet. 
(Notez bien que je ne critique pas le cycle en V, qui peut être plus adapté selon le cas)

## Virtual West - le premier flipper

Virtual West a été le premier flipper que j'ai créé. Il était basé sur l'asset du début de production et avait pour thème le western. Sa création nous a permis de découvrir les principaux problèmes auxquels nous serions confrontés dans le projet. Tout au long de ce projet, qui ne cessait de prendre de l'ampleur, j'ai mis en place un système agile pour gérer les nombreux stagiaires ainsi qu'un début d'environnement DevOps.

**Voici les outils que j'ai mis en place :**

- Proxmox (virtualisation linux)
- Gitea / Versioning
- Système de backup par RAID (avec proxmox)
- Grafana (retour de statistiques)
- Nexcloud
- Trello / Clickup
- Base de donnée
- Recherche mis en place pour jenkins
- Recherche mis en place pour système de ticketing

## Hydroball

Le deuxième flipper que j'ai créé était Hydroball. Il avait pour objectif d'accompagner le circuit de visite VR de la centrale hydroélectrique de Pranière, notre client. Pour le concevoir, j'ai repris le système de Virtual West mais j'ai changé les visuels et ajouté des effets spéciaux pour donner plus de dynamisme. Le flipper était conçu pour rappeler les expériences de la visite, avec des éléments ou des paysages marquants. Vous pourrez jouer en haut de P1700 et observer une skybox des Pyrénées, et si vous êtes attentif, vous pourrez même apercevoir la Brèche de Roland. 

## Space Flipper : Le projet final

Space Flipper est le projet le plus important que j'ai mené jusqu'à présent, et il a été pour moi le plus fascinant. J'ai entièrement repensé le système de flipper en créant un système modulaire facilement maintenable. J'ai commencé par définir les besoins du projet, puis j'ai créé un diagramme de classes pour rendre le système le plus adaptable possible. J'ai également prévu un système de base de données pour l'exploitation du site web et de l'application mobile, ainsi que des outils tels que Grafana.

J'ai personnalisé les missions de jeu avec des animations, optimisé les effets visuels et repensé le système de câblage pour offrir une expérience de jeu exceptionnelle. Le projet a remporté le concours French Tech 2021 et une version du flipper a été disponible pendant un certain temps chez Illucity à Paris. Nous avons également présenté le flipper lors de plusieurs salons, suscitant un engouement prometteur pour le projet.
