# BattleRoyal-RPG

## Description
**BattleRoyal-RPG** est un jeu de combat en temps réel basé sur la console. Les joueurs choissisent les différents personnages, tels que des zombies et des prêtres, qui s'affronteront dans une arène. La mécanique du jeu repose sur une architecture multithreadée permettant de gérer simultanément des actions comme les attaques et les délais de recharge, rendant le jeu fluide et interactif.

## Système de dès

Le Gameplay des personnages est basé sur le lancé de dès.
Les dès sont des dès de 20.
Un personnage à une attaque et une défense.

- 1 = `Echec critique`
- dès <= 5 `Echec`
- dès 6 - 15 `Neutre`
- dès >= 16 `Réussi`
- dès == 20 `Réussite critique`
 
### Attaque

| Résultat de l'Attaque | Multiplieur | Dommage Résultant |
|----------------------|-------------|------------------|
| Échec Critique       | x0          | 0                |
| Échec                | x0          | 0                |
| Neutre               | x1          | Attaque          |
| Réussite             | x1.5        | 1.5 x Attaque    |
| Réussite Critique    | x2          | 2 x Attaque      |

### Défense

| Résultat de la Défense | Multiplieur | Défense Résultante |
|------------------------|-------------|-------------------|
| Échec Critique         | x0          | 0                 |
| Échec                  | x0          | 0                 |
| Neutre                 | x1          | Défense           |
| Réussite               | x1.5        | 1.5 x Défense     |
| Réussite Critique      | x2          | 2 x Défense       |

### Cas spécifiques d'interaction entre Attaque et Défense

| Résultat de l'Attaque  | Résultat de la Défense | Conséquence                                                                 |
|------------------------|------------------------|----------------------------------------------------------------------------|
| Réussite Critique      | Réussite Critique      | `Choc épique !` *Dommage = Attaque x2 - Défense x2*                             |
| Échec Critique         | Réussite Critique      | `Contre-attaque dévastatrice!` *l'attaquant subit 2 x l'attaque du défenseur comme dommages*  |



## Caractéristiques

- **Multithreading**: Grâce à l'utilisation de threads, le jeu gère simultanément les attaques, les délais de recharge, et d'autres mécanismes sans que le joueur n'ait à attendre.
- **Système de Classes**: Chaque personnage possède une classe.
- **Compétences**: Chaque classe de personnage possède une ou plusieurs compétences, en plus de l'attaque de base. Une compétence peut avec un type de dégat prédéfini ou modifié en fonction de la classe.

>Exemple : 

| Personnage | Competence | Type |
|------------|:----------:|-----:|
|Prêtre      |AttaqueBase |Sacré |
|Guerrier    |AttaqueBase |Normal|
|Zombie      |AttaqueBase |Normal|

- **Sélection intelligente des cibles**: Les personnages choisissent leurs cibles en fonction de divers critères, garantissant des combats stratégiques.

## Design Pattern utilisé

- **Décorateur**
- **Stratégie**
- **Singleton**
- **Etat**

## Utilisation

Pour utiliser le programme:


1. Initialisez vos participants (par exemple, des zombies ou des prêtres).
2. Ajoutez-les à une instance de `BattleArena`.
3. Démarrez le combat avec la méthode `StartBattle`.
4. Lisez les résultats du combat dans la console.

Exemple:
>program.cs

```csharp
var zombie = new Zombie("Zombie Gaetan");
var pretre = new Pretre("Pretre ATesSouhaits");
var arena = new BattleArena(new List<Personnage> { zombie, pretre });

Console.WriteLine("Le combat commence !");
await arena.StartBattle();
Console.WriteLine("Le combat est terminé !");
Console.ReadLine(); // Empêche la console de se fermer immédiatement
```
## Améliorations Futures
- **Design pattern Observeur** : Pour l'affichage des messages en console et une modularité pour d'autre systèmes.
- **Système d'Équipe** : Ajout de la mécanique d'équipe basée sur des races ou types de personnages.
- **Boss** : Ajout de boss que tous des participants devrons affronté.
- **Armes et Loots** : Intégration d'un système d'armes avec des types d'attaque variés.
- **Amélioration de l'IA** : Développement de l'intelligence de l'IA pour rendre les combats plus dynamiques et imprévisibles.
- **Introduction de Nouvelles Classes de Personnages** : Ajout de diverses nouvelles classes pour enrichir la variété du gameplay.

### Avec Unity :
- **Lien avec Unity** : Intégration du jeu avec Unity pour une expérience utilisateur améliorée.
- **IA Avancée avec Vision et Déplacement** :
  - **Champ de Vision** : Implémentation d'un champ de vision pour l'IA afin qu'elle puisse détecter les ennemis basés sur la ligne de vue.
  - **Algorithme de Déplacement** : Utilisation d'algorithmes de déplacement tels que A* pour une navigation plus réaliste des personnages dans l'arène.
- **Armes et Loots** : Intégration d'un système d'armes avec des types d'attaque variés et des loots d'armes à récupérer dans l'environnement.

