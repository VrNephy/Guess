Pisano Lucas BTS SIO 22        

Rapport Projet Guess

Tout d’abord, j’ai mis en place ce qui était nécessaire à la réalisation du projet (PHP et composer). J’ai téléchargé le projet sur le site Github, fait la commande « composer Install » et « composer update ». Bien que j’aie rencontré quelques difficultés avec composer, j’ai fini par m’en sortir et enfin commencer le projet.

Une fois le projet prêt, j’ai tout d’abord testé la commande suivante : ./bin/phpunit pour voir si tout était opérationnel. Cette commande m’a affiché des erreurs ce qui est normal. Dans le fichier « CardTest » j’ai fait les « TODO » comme demandé.

<img src = "Guess/doc/capture1.jpg">

![img](Guess/doc/capture1.jpg)

Une fois les tests complétés comme ci-dessus, je me suis attaqué à CardGame32.

En commençant par la fonction compare

![](Guess/doc.capture3.jpg)

Qui permet de comparer ne nom et la suite de deux cartes différentes. J’ai également ordonné les suites/couleurs et les valeurs/nom des cartes avec deux « const » (const order_color et const order_name).

Ensuite, la fonction factoryCardGame32, qui permet d’instancier un paquet de 32 cartes sous forme de tableau.

La fonction Shuffle permet de mélanger le jeu de 32 cartes précédemment créer. Et la fonction reOrder qui remet dans l’ordre le paquet.

![](Guess/doc.capture4.jpg)

Pour continuer, La fonction getCard permet de piocher une carte dans le jeu.
![](Guess/doc.capture5.jpg)

 

Pour tester ces fonctions, j’ai créer le fichier CardGame32Test.

Dans ce dernier, je teste la fonction testToString, TestToString2cards, TestGetCard, TestShuffle et TestreOrder avec phpunit.

![img](file:///C:/Users/lucas/AppData/Local/Temp/msohtmlclip1/01/clip_image009.jpg)

Cependant, lorsque je teste CardGame32Test avec phpunit
