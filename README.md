Added two features on the original FAQ project:

1.Feature:View composer

  Epic:Pass data
  
  User Story1: As a user, I would like to go to the welcome page so I can see the latest questions.
  
  User Story2: As a user, I would like to login so I can see the unread question on my navbar.
  
  User Story3: As a user, I would like to go to different pages so I can confirm the unread question still on my navbar.
  

  
                
2.Feature:Laravel dusk

  Epic:Browser test
  
  User Story1: As a tester. I would like to Run: composer require --dev laravel/dusk so I can install dusk package.
   
  User Story2: As a tester, I would like to Run: php artisan dusk: install so I can created the browser directory. 
  
  User Story3: As a tester, I would like to change the value of APP_URL which in my .env file to https://finaljc123.herokuapp.com/
  
  so I can set the running environment.
  
  User Story4: As a tester, I would like to Run: php artisan dusk to so I can run t he browser test.
  
  


## To run the FAQ project:

1. git clone https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other https://laravel.com/docs/5.6/database
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed

9.Configure the operating environment for laravel dusk https://laravel.com/docs/5.6/dusk

10.Configure the operating environment for view composer

## Project Resources:

## Prerequisites:
You need to complete upto video 20 where it has testing to begin this project, if you don't have previous experience with Laravel.

https://laracasts.com/series/laravel-from-scratch-2017

## FAQ Tutorial Playlist 
https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD

## Relevant Laravel Resources:

https://laravel.com/docs/5.6/eloquent

https://laravel.com/docs/5.6/database

https://laravel.com/docs/5.6/seeding

https://laravel.com/docs/5.6/testing

https://laravel.com/docs/5.6/views

https://laravel.com/docs/5.6/dusk

## Relevant General Resources

https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow

https://www.jetbrains.com/phpstorm/

http://agiledata.org/essays/tdd.html

## Free Alternative:
https://code.visualstudio.com/
