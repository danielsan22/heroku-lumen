<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Pusher;

class PusherController extends Controller
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

    public function triggerEvent() {

    $options = array(
      'cluster' => 'us2',
      'encrypted' => true
    );
    $pusher = new Pusher(
      '5d098ffbb52514d9fe70',
      '65e233aecb131f62c112',
      '358479',
      $options
    ); 

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
    }

}
