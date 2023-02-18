Les Lignes de Commandes


Creer un nouveau projet Laravel
1. composer create-project --prefer-dist laravel/laravel Maisonneuve2194469

Creer des Modeles
2. php artisan make:model Etudiant
3. php artisan make:model Ville

Creer des tables
4. php artisan make:migration create_etudiants_table

Inserer des donnnes
5. php artisan make:factory EtudiantFactory
6. php artisan make:factory VilleFactory
7. php artisan tinker
8. Marcos, j'ai oublier de prends des photos de la ligne de commande exacte pour faire l'insertino de donnees. 
Je sais que on utilise tinker pour inserer les donners et des seeders (faker) pour c

composer require laravel/tinker
php artisan tinker
\App\Models\Etudiant::factory()->create(100); 

php artisan tinker
\App\Models\User::factory()->create(100); 


Creer des Controlleurs

9. php artian make:controller EtudiantController 



Mon Lien de Github

https://github.com/Gabi-Tho/TP_1
