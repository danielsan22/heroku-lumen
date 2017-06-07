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
      /*DB::table('depar')->insert([
        'Precio' => 28000.45,
        'Estado' => "Dinamic"
      ]);
      */
      $results2 = DB::select("SELECT * FROM depar");

      return $results2;
      //return "{'hola':'mundo'}";
    }
    public function saludaPorritas(){
      return "Kp2 mi porritas, ya jala este pedo";
    }

    //
}
