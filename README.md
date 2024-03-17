![image](https://github.com/omar-amrouss/LaravelFortity/assets/133509604/a946eb56-e5e8-495f-ab80-bd5f0c18a4d3)


<p align="center">
    <a href="https://github.com/laravel/fortify/actions">
        <img src="https://github.com/laravel/fortify/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/fortify">
        <img src="https://img.shields.io/packagist/dt/laravel/fortify" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/fortify">
        <img src="https://img.shields.io/packagist/v/laravel/fortify" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/fortify">
        <img src="https://img.shields.io/packagist/l/laravel/fortify" alt="License">
    </a>
</p>

# Installation de l'application Laravel Fortify Authentication

Ce projet est un exemple d'application Laravel utilisant Laravel Fortify pour l'authentification des utilisateurs.

## Configuration

Avant de démarrer l'application, assurez-vous d'avoir configuré votre environnement comme suit :

1. Assurez-vous d'avoir PHP (>= 7.3) et Composer installés localement.
2. Configurez votre base de données dans le fichier `.env` en renseignant les informations appropriées.
3. Exécutez `composer install` pour installer les dépendances.
4. Exécutez `php artisan migrate` pour migrer la base de données.
5. Facultatif : exécutez `php artisan db:seed` pour remplir la base de données avec des données de test.

## Utilisation

Pour utiliser cette application, suivez ces étapes :

1. Lancez le serveur Laravel en exécutant `php artisan serve`.
2. Accédez à l'application dans votre navigateur à l'adresse `http://localhost:8000`.
   
   ![image](https://github.com/omar-amrouss/LaravelFortity/assets/133509604/c72431be-9e79-4dc4-9396-4e3ebf812f1f)
3. Vous pouvez vous inscrire en tant qu'utilisateur en cliquant sur le bouton "Register"
   
   ![image](https://github.com/omar-amrouss/LaravelFortity/assets/133509604/97b90e99-e1b3-4af0-b79b-1ff630a368f1)
4. Vous pouvez se connecter en utilisant votre compte en cliquant sur le bouton "Login"
   
   ![image](https://github.com/omar-amrouss/LaravelFortity/assets/133509604/c027483b-eaa8-442b-819b-e52fc100aec9)
5. Si vous perder votre mot de passe, il suffit de cliquer sur `Forgot password?`, pour récupérer vorte compte.

   ![image](https://github.com/omar-amrouss/LaravelFortity/assets/133509604/cafca4b7-4208-4485-9f1b-07ba653468f5)



## Fonctionnalités

- Inscription et connexion des utilisateurs.
- Réinitialisation du mot de passe.
- Gestion des sessions utilisateur.
- Protection contre les attaques par force brute et les fuites d'informations.

## Ressources supplémentaires

- [Documentation Laravel Fortify](https://laravel.com/docs/fortify)
- [Documentation Laravel](https://laravel.com/docs)

## Auteur

Ce projet a été développé par [AMROUSS OMAR](https://github.com/omar-amrouss).

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
