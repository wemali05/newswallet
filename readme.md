# News Wallet

## Client Problem Statement 

I read a lot of news articles and many are the times I find very good articles that are worth saving for future reference. As it stands, there is no better way to do this other than bookmark the link to the site on my browser or save it on Opera Mini, options that I don’t find helpful for my needs.


## Getting started

### Launch the starter project

*(Assuming you've [installed Laravel](https://laravel.com/docs/5.5/installation))*

Fork this repository, then clone your fork, and run this in your newly created directory:

``` bash
composer install
```

Next you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root.

Run the following command to generate your app key:

```
php artisan key:generate
```

Then start your server:

```
php artisan serve
```

Your Laravel starter project is now up and running! 

### Configure the starter project

Edit the `config/prismic.php` prismic configuration file to get the application connected to the correct repository:

```
'url' => 'https://your-repo-name.prismic.io/api/v2',
```

You may have to restart your server.

### Create your routes and pages

When the project is first launched and viewed, it will by default display a help page. Here you will find some documentation to help you get started with your Laravel project.

It includes an example that shows how to create a route and query a document of the custom type "page". It then shows how to integrate the content into the Laravel templates. 

Check it out to get a better understanding of how you would create your own routes and templates for your project. You can also explore our documentation to learn more about how to [query the API](https://prismic.io/docs/php/query-the-api/how-to-query-the-api) and how to integrate content fields like [Rich Text](https://prismic.io/docs/php/templating/rich-text), [Images](https://prismic.io/docs/php/templating/image), and more.

## Deploying your Laravel application

Once you've created your website, an easy way to deploy your Laravel application is to use [Heroku](http://www.heroku.com). Just follow these few simple steps once you have successfully [signed up](https://id.heroku.com/signup/www-header) and [installed the Heroku toolbelt](https://toolbelt.heroku.com/):

Create a new Heroku application

```
$ heroku create
```

Initialize a new Git repository:

```
$ git init
$ heroku git:remote -a your-heroku-app-name
```

Commit your code to the Git repository if you haven't already:

```
$ git add .
$ git commit -am "make it better"
```

Set a Laravel encryption key:

```
$ heroku config:set APP_KEY=$(php artisan --no-ansi key:generate --show)
```

Push to Heroku:

```
$ git push heroku master
```

You can now browse your application online:

```
$ heroku open
```

You can read more about launching your project with Heroku here in their [Laravel & Heroku guide](https://devcenter.heroku.com/articles/getting-started-with-laravel).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
