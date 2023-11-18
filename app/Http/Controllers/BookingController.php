<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// require_once('vendor/autoload.php');
 
class BookingController extends Controller
{
    
    public function allMovieView(Request $request)
    {
        return ('hello');
    }

    public function allpopularMovieView(){

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?region=IN', [
        'headers' => [
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhYWY2NWJkY2YxOTM3YTIwMTQ1OTYwNGM1YThkZTAyOSIsInN1YiI6IjY1NThkODFlNTM4NjZlMDExYzA5MTRmZCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ._3niCCON-WXqUJ8GwigWeK8ddUwBlItyzSh_p8iKvac',
            'accept' => 'application/json',
        ],
        ]);

        return($response->getBody());
    }
}