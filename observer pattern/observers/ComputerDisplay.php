<?php
/**
 * Created by PhpStorm.
 * User: kshay
 * Date: 14/01/2019
 * Time: 10:48
 */

class ComputerDisplay implements IObserver, IDisplay
{
    private $sensor;

    /**
     * this is made so that after the observer gets a notification about the changed state of the observable
     * this observer can fetch the new data from the observable.
     **/
    public function __construct(IObservable $weatherSensor)
    {
        $this->sensor = $weatherSensor;
    }

    public function update()
    {
        $weatherData = $this->fetchWeatherData();
        $this->display($weatherData);
    }

    public function display($data)
    {
        // TODO: Implement the display functionality

        echo $data;
    }

    public function fetchWeatherData()
    {
        return $this->sensor->getWeather();
    }
}