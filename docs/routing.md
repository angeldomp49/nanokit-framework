
## Routing ##

1.- Enable the module in app/modules.php file, it should be included after __Util__ module
2.- Register a route in the app/routes.php file

    Route::get( '/home', [ HomeController::class, 'home' ] );

You should declare the use of the controller class also

    use App\HomeController;

3.- Create your controller adding a file with the same class name in the src/Controllers directory

src
   |
    --->Controllers
                  |
                  --->HomeController.php

4.- Create your class controller. Notice the method name has been declared in the app/routes.php like home,
then you need to create it. Inside we call the *home* view it can be different.

    <?php
    namespace App\Controllers;

    class HomeController{
        public function home(){
            view( 'home' );
        }
    }

5.- Create a view adding a file in the __src/Views__ directory

src
   |
    --->Views
            |
            --->home.php

6.- Fill your view with your html custom code.

    <h1>Hello world!</h1>

7.- Run the next command for update your created classes

    php composer.phar dump-autoload

8.- Start your local server using 

    php -S localhost:8000 -t public

9.- Then access to the browser with:

    http://localhost:8000/home
