<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px">Movie Quotes App</h1>
</div>

---

This **Movie Quotes** app is the best destination for movie enthusiasts and quote lovers. Discover a new randomly generated movie quote on our landing page with each refresh, and browse our collection of quotes for more inspiration and entertainment.

#

### Table of Contents

-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Migrations](#migration)
-   [Development](#development)
-   [Resources](#resources)

#

### Prerequisites

-   <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
-   <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> _MYSQL@8 and up_
-   <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> _npm@6 and up_
-   <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> _composer@2 and up_

#

### Tech Stack

-   <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework

-   <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#

### Getting Started

1\. First of all you need to clone Movie Quotes App repository from github:

```sh
git clone https://github.com/RedberryInternship/nikoloz-danelia-movie-quotes
```

2\. Next step requires you to run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```sh
npm install
```

and also:

```sh
npm run dev
```

in order to build your JS/SaaS resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.

```sh
cp .env.example .env
```

And now you should provide **.env** file all the necessary environment variables:

#

**MYSQL:**

> DB_CONNECTION=mysql

> DB_HOST=127.0.0.1

> DB_PORT=3306

> DB_DATABASE=**\***

> DB_USERNAME=**\***

> DB_PASSWORD=**\***

#

after setting up **.env** file, execute:

```sh
php artisan config:cache
```

in order to cache environment variables.

5\. Now execute in the root of you project following:

```sh
php artisan key:generate
```

##### Now, you should be good to go!

#

### Migration

if you've completed getting started section, then migrating database if fairly simple process, just execute:

```sh
php artisan migrate
```

#

### Development

You can run Laravel's built-in development server by executing:

```sh
php artisan serve
```

Build js files:

```sh
npm run dev
```

it will watch JS files and on change it'll rebuild them, so you don't have to manually build them.

To create user execute:

```sh
php artisan user:create
```

#

### Resources

Structure of database:

<img src="/readme/assets/drawSQL.png" style="position:absolute; top:10px" height="250"/>

#
