<?php

namespace App;

//composer require guzzlehttp/guzzle
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use \DateTime;

use Illuminate\Database\Eloquent\Model;

class ApiNews extends Model
{
    //
    public function queryNews($queryString)
    {
        try  {
            $client = new GuzzleHttpClient();
            //query the last week for news 
            //modify this to change the date range
            // todo? select box to adjust time range
            $sevenDaysPrior = new DateTime('7 days ago');
            $sevenDaysPrior = $sevenDaysPrior->format('Y-m-d');
            $currentDay = (new DateTime('now'))->format('Y-m-d');
            $newsApiRequest = $client->request('GET','https://newsapi.org/v2/everything?q='.$queryString.
            '&from='.$sevenDaysPrior.'&to='.$currentDay.'&sortBy=popularity&apiKey=1964101075a947eeba907003b1bd5a4b');

            $articleData = json_decode($newsApiRequest->getBody()->getContents(), true);
            return $articleData;
        } catch (RequestException $e) {
            //For handling exception
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}
