Pour initialiser le project:
1. https://github.com/carmenbarranco/les-lutins-du-pere-noel.git
2. Vous devez avoir installé Docker et docker-compose
4. dcu -d --build (à l'interieur du project)
5. docker exec -it santa_elves composer config disable-tls false
6. docker exec -it santa_elves composer install (si un token vous ait demandé cliquez ici et generer un puis rentrez-le dans la console: https://github.com/settings/tokens/new?scopes=repo&description=install_composer_project )
7. docker exec -it santa_elves yarn install
8. docker exec -it santa_elves yarn build
9. docker exec -it santa_elves php bin/console d:m:m (accepter la migration)
10. docker exec -it santa_elves php bin/console doctrine:fixtures:load
11. Rendez vous sur http://localhost:8889/
12. Connextez-vous en tant que chef2@les-lutins-du-pere-noel.fr (mdp: totototo)
13. Explorer l'interface. Si vous vous rendez sur 'les cadeaux' vous pouvez:
    - Créer des nouveaux cadeaux
    - Exporter le tableau actuel (si vous ne voyez pas le fichier csv vous le trouverai à l'interieur du project sur public/uploads/documents/
    - Uploader un nouveau fichier excel (vous pouvez vous servir du fichier que vous venez d'exporter) afin d'enregistrer des nouveaux cadeaux
14. Connectez-voous en tant que perenoel@les-lutins-du-pere-noel.fr (mdp: totototo)
15. Vous pouvez acceder à l'ensemble des usines et à l'ensemble de stock des cadeaux par usine avec les informations demandé lors du test
16. Amusez-vous bien!
