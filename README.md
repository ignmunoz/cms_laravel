# cms_laravel
Learning how to build a CMS in Laravel 5.4

NOTES:

In CMD:
1. if this project was cloned, run 'composer update --no-scripts'
2. Next, run 'npm install', then 'npm install bulma', then 'npm install buefy' and finally 'npm install font-awesome'

If MySQL version < 5.7.7, edit the AppServiceProvider.php located in app/Providers folder:
/*
*
*
*/
use Illuminate\Support\Facades\Schema; 
/*
*
*
*/
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    
