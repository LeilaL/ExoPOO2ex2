# ExoPOO2ex2
EXERCICES POO PHP 2 Exercice 2

Exercice 2 : gérer ses objets en base de données

dans cet exercice vous allez gérer une petite base de données en orienté objet, celle-ci vous
permettra de gérer des chats.

étape 1 :
Créez une classe chat avec les attributs suivants :
- Nom
- Age
- Sexe
- Couleur

N’oubliez que votre chat ne peut avoir que deux sexes différents, il s’agit donc d’une valeur
constante. Idem pour les couleurs.
N’oubliez également de forcer le typage des arguments dans vos fonctions avec le mode strict de
php.

Dans vos setters vérifiez entre autres que :
- Le nom ne dépasse pas 15 caractères- L’age est compris entre 0 et 30

Etape 2 :
Créez un objet vous permettant de gérer vos chats en base de données. Cette objet vous permettra
notamment :
- d’enregistrer un objet chat
- de sélectionner tous les chats de votre base de données

Etape 3 :
Créez une petite vue contenant un formulaire, quand l’utilisateur remplit ce formulaire, un nouvel
objet chat est enregistré en base de données et il apparaît dans la vue qui liste tous les chats
enregistrés.
