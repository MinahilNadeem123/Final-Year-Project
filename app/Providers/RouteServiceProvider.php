<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware('admin')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }



    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => ['api', 'cors'],
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            //Add you routes here, for example:
            Route::post('login', 'Api\LoginController@login')->name('login');
            Route::post('register', 'Api\LoginController@register')->name('register');

                Route::get('getLabTest', 'Api\LabController@getLabs')->name('getLabTest');
                Route::get('getDepartment', 'Api\DoctorController@getDepartment')->name('getDepartment');
                Route::post('addAppointment', 'Api\AppointmentController@addAppointment')->name('addAppointment');
                Route::get('getDoctor', 'Api\DoctorController@getDoctor')->name('getDoctor');
                Route::get('getMrn', 'Api\PatientController@getMrn')->name('getMrn');
                Route::post('getDepartmentDoctor', 'Api\DoctorController@getDepartmentDoctor')->name('getDepartmentDoctor');
                Route::get('getReports', 'Api\LabController@getReports')->name('getReports');


        });
//        Route::prefix('api')
//            ->middleware('api')
//            ->namespace($this->namespace)
//            ->group(base_path('routes/api.php'));
    }
}
