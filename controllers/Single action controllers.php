# Single action controllers

Usa el método **\_\_invoke()** cuando tengas un controlador con una única acción.

### Comando artisan

```shell
$ php artisan make:controller ExampleController --invokable
```

### Ruta

```php
<?php 

use App\Http\Controllers\ExampleController;
 
Route::get('/example/{id}', ExampleController::class);
```

### Controlador

```php
<?php
 
namespace App\Http\Controllers;
 
// ...
 
class ExampleController extends Controller
{
    public function __invoke()
    {
        // ...
    }
}
```