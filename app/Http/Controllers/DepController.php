<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DepController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }




    public function getAll() {
      //$results = app('db')->select("SELECT * FROM depar");
      $results2 = DB::select("SELECT * FROM depar");

      return $results2;
    }

    //
}
