Wayfarer
=

#### Warning!
**The application is not intended for external use.**  
**The code it contains has a demonstration purpose.**

## Installation

* Clone this repository
* Create database: `/database/database.sqlite`
* Running configure database access in `.env` file (DB_CONNECTION=sqlite, see: env.example)
* Run `composer install`
* Run `composer dump-autoload`
* Run `php artisan key:generate`
* Run `npm install && npm run dev` to compile your fresh scaffolding.
* If webpack has problem resolving any packages, try to run `npm install` once again.
* Run `php artisan migrate`
* Run `php artisan db:seed`
* Run `php artisan serve`

## Administration Panel
	
- E-Mail Address: `admin@example.com`
- Password: `admin`

## Documentation Generator

- Run `php artisan generate:doc`

## Testing 

To test smoothly , follow these steps:

* Create database: /database/testing.sqlite
* Run php artisan migrate —database sqlite_testing
* ![](doc/images/test/test.png)

## Application Content
- [Technical Documentation](doc/tableOfContents.md)
- [User Manual](doc/markdown/userManual/userManual.md)
