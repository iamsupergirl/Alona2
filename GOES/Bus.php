<?php
/**
 * @file
 * Description.
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'GOES');

$connect=mysqli_connect(HOST,USER,PASS,DB);
if(!$connect){
    echo "Error:Unable to connect MySQL".PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was established! " . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connect) . PHP_EOL;
echo '<pre>';

/*Добавление автобуса*/

/*$busOne="INSERT INTO Bus(id,title,start_station,end_station)
VALUES (5,'Popovicha-Gorkogo','Popovicha','Gorkogo')";
$addBus=$connect->query($busOne);*/

 /*Добавление времени остановки*/

/*$timeOne="INSERT INTO Bus_Station_Time(id_bus, id_busStation, time)
VALUES (15,11,'09:30:00')";
$addTime=$connect->query($timeOne);*/

/*Добавление маршрута*/

/*$routOne="INSERT INTO Routes(id, id_bus, rout)
VALUES (4,5,'POpovicha-Sovetskaja-Lenina-Gorkogo')";
$addRout=$connect->query($routOne);*/

/*Добавление остановки*/

/*$stationOne="INSERT INTO Station(title, latitude, longtitude)
VALUES ('Popovicha',10,19) ";
$addStation=$connect->query($stationOne);*/

/*Добавление остановок маршрута*/
function addStation()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $arrayOne = "INSERT INTO StationArray(id_Bus, id_Station, order_Station)
VALUES(5,11,1)";
    $addArray = $connect->query($arrayOne);
}
/*addStation();*/

/*Список всех автобусов системы*/
function getAllBus()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $busList = $connect->query("SELECT * FROM Bus");
    $list = $busList->fetch_all(MYSQLI_ASSOC);
    print_r($list);
}
/*getAllRoutes();*/
 /*Список маршрутов системы*/
 function getAllRoutes(){
     $connect = mysqli_connect(HOST, USER, PASS, DB);
$listRoutes=$connect->query("SELECT * FROM Routes");
$routes=$listRoutes->fetch_all(MYSQLI_ASSOC);
print_r($routes);
}
/*getAllRoutes();*/

/*Список всех остановок системы*/
function getAllStation()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $listStation = $connect->query("SELECT id,title FROM Station");
    $station = $listStation->fetch_all(MYSQLI_ASSOC);
    print_r($station);
}
/*getAllStation();*/

/*Список маршрутов автобуса по номеру автобуса*/
function getRoute()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $bus = $connect->query("SELECT id_bus,rout FROM Routes WHERE id_bus=15");
    $busNumber = $bus->fetch_all(MYSQLI_ASSOC);
    print_r($busNumber);
}
/*getRoute();*/

/*Список остановок выбранного маршрута по номеру маршрута*/
function getListStation()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $stationRoute = $connect->query("SELECT id_bus,title FROM StationArray
LEFT JOIN Station ON StationArray.id=Station.id WHERE id_Bus=15");
    $chooseRoute = $stationRoute->fetch_all();
    print_r($chooseRoute);
}
/*getListStation();*/

/*расписание прибытия автобуса выбраннго
маршрута на выбранную остановку(по номеру остановки)*/

function getTimetable()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $listChoose = $connect->query("SELECT StationArray.id_Bus,order_Station,title,time FROM StationArray
LEFT JOIN Station ON Station.id=StationArray.id_Station
LEFT JOIN Bus_Station_Time ON Bus_Station_Time.id_busStation=Station.id
WHERE StationArray.id_Bus=1 AND order_Station=1");
    $chooseOrder = $listChoose->fetch_all(MYSQLI_ASSOC);
    print_r($chooseOrder);
}
/*getTimetable();*/

/*список автобусов выбранной остановки (по номеру остановки)*/

function getList()
{

    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $listStation = $connect->query("SELECT Station.id,title,StationArray.id_Bus FROM Station
LEFT JOIN StationArray ON StationArray.id_Station=Station.id
WHERE Station.id=2");
    $stationLils = $listStation->fetch_all(MYSQLI_ASSOC);
    print_r($stationLils);

}
/*getList();*/

/*номер ближайшей остановки( по latitude, longtitude)*/

function getNumber()
{
    $connect = mysqli_connect(HOST, USER, PASS, DB);

    $numberStation = $connect->query("SELECT * FROM Station");
    $stations = $numberStation->fetch_all(MYSQLI_ASSOC);
    foreach ($stations as &$station) {
        $station['distance'] = sqrt( pow($station['latitude'] - 10,2 ) + pow($station['longtitude'] - 5,2));
    }

    usort($stations, function($a, $b) {
        return $a['distance'] - $b['distance'];
    });
    $arrayStation = array_slice($stations,0,6,true);
    print_r($arrayStation);

    return $stations;
}
getNumber();

/*список остановок в радиусе( по latitude, longtitude, R)*/
 function inRadius()
{

    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $r = 5;
    $counter = 0;
    $result = array();
    $radius = $connect->query("SELECT * FROM Station");
    $radiusStation = $radius->fetch_all(MYSQLI_ASSOC);
    foreach ($radiusStation as $value) {
        $distance = sqrt(pow($value['latitude'] - 5, 2) + pow($value['longtitude'] - 15, 2));
        if ($distance <= $r) {
            $result[] = $value;
        }
        $distance = 0;
        $counter++;
    }

    print_r($counter);
    print_r($result);
}
/*inRadius();*/
