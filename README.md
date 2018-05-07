Added two features on the original FAQ project:

1.Feature:View composer

  Epic:Pass data
  
  User Story1: As a laravel developer, I would like to create a couple of new buttons on master page of layouts so I can show the data.
  
  User Story2: As a laravel developer, I would like to make some simple routes so I can get the pages I want.
  
  User Story3: As a laravel developer, I would like to make a new controller so I can extract data.
  
  User Story4: As a laravel developer, I would like to use HTML method so I can 
  
  User Story5: As a laravel developer,
  
  User Story6: As a laravel developer,
  
  User Story7: As a laravel developer,
  
  User Story8: As a laravel developer,
  
  User Story9: As a laravel developer,
  
                
2.Feature:Laravel dusk

  Epic:Browser test
  
  User Story1: As a laravel developer,I would like to write a login test so I can confirm whether the home page is responsed.
  
  User Story2: As a laravel developer,I would like to write a registration test so I can confirm whether the home page is responsed.
  
  User Story3: As a laravel developer,I would like to write a creating question test so I can confirm whether the home page is responsed
  
  User Story4: As a laravel developer,I would like to write a creating answer test so I can see the context of answer or not.
  
  User Story5: As a laravel developer,I would like to write a welcome page test so I can see whether the data is passed.
  
  User Story6: As a laravel developer,I would like to write a view composer test so I can confirm whether the data has been shared.
  


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
