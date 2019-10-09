<?php

namespace App\Controller;

use App\Entity\DailyForecasts;
use App\Entity\Headlines;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $dailyForecasts = $this->getDoctrine()->getRepository(DailyForecasts::class)->findAll();
        $headlines = $this->getDoctrine()->getRepository(Headlines::class)->findAll();
        return $this->render('main/index.html.twig',  array('dailyForecasts' => $dailyForecasts, 'headlines' => $headlines));
    }
    /**
     * @Route("/refresh", name="refresh")
     */
    public function refresh()
    {

        $this->_truncateTables(array('daily_forecasts', 'Headlines'));
        $this->_forecast_api();
        return $this->redirectToRoute('main');


    }

    private function _forecast_api(){
        $client = HttpClient::create();
        $response = $client->request('GET', $_ENV['API_URL'].'/'.$_ENV['API_DAYS'].'/'.$_ENV['LOCATION_KEY'].'?apikey='.$_ENV['API_KEY']);
        if (200 !== $response->getStatusCode()) {
            throw new \Exception('An error occured while connecting to the API. Please, Try again Later.');
        }
        $content = $response->toArray();
        $this->_add_headlines_to_database($content['Headline']);
        $this->_add_forecastdata_to_database($content['DailyForecasts']);


    }
    private function _add_headlines_to_database($headlines){

        $entityManager = $this->getDoctrine()->getManager();
        $headline = new Headlines();
        $headline->setEffectiveDate(new \DateTime($headlines['EffectiveDate']));
        $headline->setEffectiveEpochDate($headlines['EffectiveEpochDate']);
        $headline->setSeverity($headlines['Severity']);
        $headline->setText($headlines['Text']);
        $headline->setCategory($headlines['Category']);
        $headline->setEndDate($headlines['EndDate']);
        $headline->setEndEpochDate($headlines['EndEpochDate']);
        $headline->setMobileLink($headlines['MobileLink']);
        $headline->setLink($headlines['Link']);
        $entityManager->persist($headline);
        $entityManager->flush();
    }

    private function _add_forecastdata_to_database($forecastData){
        $entityManager = $this->getDoctrine()->getManager();
        foreach ($forecastData as $forecast){
            $dailyForecast = new DailyForecasts();
            $dailyForecast->setDate(new \DateTime($forecast['Date']));
            $dailyForecast->setTemperature(json_encode($forecast['Temperature']));
            $dailyForecast->setDay(json_encode($forecast['Day']));
            $dailyForecast->setNight(json_encode($forecast['Night']));
            $dailyForecast->setSources(json_encode($forecast['Sources']));
            $dailyForecast->setMobileLink($forecast['MobileLink']);
            $dailyForecast->setLink($forecast['Link']);
            $entityManager->persist($dailyForecast);

        }
        $entityManager->flush();
    }

    private function _truncateTables($tableNames = array(), $cascade = false) {
        $entityManager = $this->getDoctrine()->getManager();
        $connection = $entityManager->getConnection();
        $platform = $connection->getDatabasePlatform();
        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tableNames as $name) {
            $connection->executeUpdate($platform->getTruncateTableSQL($name,$cascade));
        }
        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
