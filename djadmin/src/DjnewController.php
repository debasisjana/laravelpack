<?php 
namespace Djpack\Djadmin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DjnewController extends Controller
{

     public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo $time->toDateTimeString();
    }

}
?>