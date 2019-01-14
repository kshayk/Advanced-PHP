<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 14/01/2019
 * Time: 10:46
 */

require_once('../interfaces/IObservable.php');
require_once('../interfaces/IObserver.php');
require_once('../interfaces/IDisplay.php');
require_once('../observers/PhoneDisplay.php');
require_once('../observers/ComputerDisplay.php');

class WeatherSensor implements IObservable
{
    private $observers = [];
    private $weather;

    public function add(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function remove(IObserver $observer)
    {
        if(($key = array_search($observer, $this->observers, true)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function weatherChanged($weather)
    {
        $this->weather = $weather;
        $this->notify();
    }

    public function getWeather()
    {
        return $this->weather;
    }
}

//instantiating a new observable
$weatherSensor = new WeatherSensor();

//instantiating some observers
$phoneDisplayA = new PhoneDisplay($weatherSensor);
$phoneDisplayB = new PhoneDisplay($weatherSensor);
$computerDisplayA = new ComputerDisplay($weatherSensor);

//Registering the observers to the observable
$weatherSensor->add($phoneDisplayA);
$weatherSensor->add($phoneDisplayB);
$weatherSensor->add($computerDisplayA);

//removes an observer from the observers list
//$weatherSensor->remove($phoneDisplayB);

//simulating a scenario where the sensor received some new weather data, we can expect this method to be private IRL
$weatherSensor->weatherChanged('cloudy');




