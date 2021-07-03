Pour initialiser le project:
1. git clone https://github.com/carmenbarranco/les-lutins-du-pere-noel.git
2. Pensez à créer le ficher .env avec les données transmises en privée
3. Vous devez avoir installé Docker et docker-compose
4. dcu -d --build (à l'interieur du project)
6. docker exec -it santa_elves composer install
7. docker exec -it santa_elves yarn install
8. docker exec -it santa_elves yarn build
9. docker exec -it santa_elves php bin/console d:m:m (accepter la migration)
10. docker exec -it santa_elves php bin/console doctrine:fixtures:load (pour creer des fausses donnés)
11. mkdir uploads && mkdir uploads/documents &&  mkdir uploads/documents/gifts && chmod -R 777 uploads
12. Rendez vous sur http://localhost:8889/
13. Connextez-vous en tant que chef2@les-lutins-du-pere-noel.fr (mdp: totototo) (je sais, pas bien...)
14. Explorer l'interface. Si vous vous rendez sur 'les cadeaux' vous pouvez:
    - Créer des nouveaux cadeaux
    - Exporter le tableau actuel (si vous ne voyez pas le fichier csv vous le trouverai à l'interieur du project sur public/uploads/
    - Uploader un nouveau fichier excel (vous pouvez vous servir du fichier que vous venez d'exporter) afin d'enregistrer des nouveaux cadeaux
15. Connectez-voous en tant que perenoel@les-lutins-du-pere-noel.fr (mdp: totototo) (idem)
16. Vous pouvez acceder à l'ensemble des usines et à l'ensemble de stock des cadeaux par usine avec les informations demandé lors du test
17. Amusez-vous bien!