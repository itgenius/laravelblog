# Atelier Laravel Blog – Chapitre 1 : Installation et mise en place du projet

Ce projet correspond au chapitre 1 de l’atelier « Créer un blog avec Laravel ».

Dans ce chapitre, on installe Laravel, on vérifie que l’application fonctionne en local, on configure la base de données et on met en place le versionnement avec Git et GitHub. L’objectif est d’avoir une base propre pour les chapitres suivants.

---

## 1. Objectifs du chapitre

À la fin de ce chapitre, tu seras capable de :

- installer un projet Laravel en local ;
- configurer le fichier `.env` pour la base de données ;
- lancer les migrations de base de Laravel ;
- démarrer le serveur de développement avec `php artisan serve` ;
- initialiser Git, faire un premier commit et pousser le projet sur GitHub.

---

## 2. Prérequis

Avant de commencer, assure-toi d’avoir installé sur ta machine :

- PHP (version compatible avec la version de Laravel que tu utilises) ;
- Composer ;
- MySQL ou MariaDB (installé via Laragon, WAMP, XAMPP ou autre) ;
- Git ;
- Un éditeur de code (par exemple Visual Studio Code) ;
- Laragon (si tu es sous Windows) est fortement recommandé pour simplifier l’environnement.

---

## 3. Création du projet Laravel

Si ce projet a été créé avec la commande `composer create-project`, voici les étapes à suivre pour le reproduire :

Dans un terminal, place-toi dans ton dossier de travail (par exemple `C:\laragon\www`) :

```bash
cd C:\laragon\www
composer create-project laravel/laravel laravelblog
cd laravelblog

---

## 4. Configurer le fichier .env

Le fichier .env contient la configuration spécifique à ton environnement (base de données, clé de l’application, etc.).

Si ce n’est pas déjà fait, copie le fichier d’exemple :

```bash
cp .env.example .env


Ou, sous PowerShell :

```bash
copy .env.example .env



Ouvre ensuite .env dans ton éditeur (VS Code par exemple) et configure au minimum la partie base de données pour utiliser MySQL avec Laragon :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME=root
DB_PASSWORD=

Tu peux adapter DB_DATABASE si tu veux un autre nom de base.

---

## 5. Créer la base de données MySQL
Ouvre phpMyAdmin (ou un autre client MySQL) via Laragon.

Crée une base de données portant le même nom que dans .env, par exemple laravelblog.

En SQL brut, cela donnerait :
CREATE DATABASE laravelblog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

À ce stade, la base est vide, mais elle est prête à recevoir les tables de Laravel.
---


## 6. Générer la clé de l’application
Laravel a besoin d’une clé d’application pour sécuriser certaines fonctionnalités (sessions, chiffrement, etc.).

Dans le terminal, à la racine du projet :
php artisan key:generate

Cela mettra à jour la valeur APP_KEY dans ton fichier .env.

---

## 7. Lancer les migrations de base

Les migrations vont créer les tables par défaut de Laravel (users, password_resets, etc.).

Dans le terminal :

php artisan migrate

Si tout est bien configuré, les tables seront créées dans la base laravelblog.

En cas d’erreur de connexion, vérifie :

les identifiants dans .env ;

que MySQL tourne bien via Laragon.
---

## 8. Vérifier à nouveau l’application

Relance le serveur si nécessaire :
php artisan serve

Retourne sur l’URL :

http://127.0.0.1:8000

L’application doit toujours être accessible.
Tu as maintenant :

Laravel installé ;

la base de données connectée ;

les tables de base migrées.

C’est un bon point de départ pour commencer le développement du blog.
---



