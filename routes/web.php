<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function (\Illuminate\Http\Request $request) {
   $controllerName = '\\App\\Http\\Controllers\\' . ucfirst(str_starts_with($request->path(), '/') ? substr($request->path(), 1) : $request->path()) . 'Controller';

   if (class_exists($controllerName)) {
       $controller = new $controllerName;

       if (method_exists($controller, 'actionIndex'))
           return $controller->actionIndex();
   }

   return abort(404);
})->where('any', '.*');
