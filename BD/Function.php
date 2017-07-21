<?php
/**
 * @file
 * Description.
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'movie_task');

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

/*Добавление человека:*/
/*if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $connect = mysqli_connect(HOST, USER, PASS, DB);
    $userOne = "INSERT INTO Users( name,age) VALUES ('$name','$age')";
    $howMany1 = $connect->query($userOne);
}
?>
<html>
<title> Add User </title>
<body>
===================================================================
<FORM method="POST" action="/BD/Function.php" name="myform">
    <table width="100%" cellspacing="0" cellpadding="4">
        <tr>
            <td align="right" width="100">NAME</td>
            <td><input type="text" name="name" maxlength="50" size="20"></td>
        </tr>
        <tr>
            <td align="right">AGE</td>
            <td><input type="text" name="age" maxlength="50" size="6"></td>
        </tr>
        <tr>
        <td align="right"><input type="submit" name="submit" value="Добавить"></td>
        </tr>
    </table>
</FORM>
</body>
</html>

<?php*/

/*Добавление фильма:*/

/*$filmFirst="INSERT INTO Films(movie_title,author,date_start,lenght,cash) VALUES
('Alien','Ridley Scott',1979,116,104931801)";*/

/*Добавление просмотров:*/

/*$list1="INSERT INTO List( id_users,id_films, views,date_views) VALUES (3,3,3,'17.03.03')";*/

/*Запрос в БД*/

/*$howMany1=$connect->query($filmFirst);*/
/*$howMany2=$connect->query($list1);*/

/*добавить age для всех людей на 5 лет*/

/*$addAge5=$connect->query("UPDATE `Users` SET `age` = `age` + 5");*/

/*
Добавляет 10 лет тому человеку, который смотрел фильм больше 2х раз

//$addTenEars=$connect->query('update Users set age = age + 10 where id in (select u.id from List as l left join
(select * from Users) as u on u.id = l.id_users group by l.id_users having count(l.views) > 2)');*/

/*
// Добавить к названию фильма слово 'New'.

$connect->query("update Films set movie_title = CONCAT('New ', movie_title) where date_start > YEAR(CURRENT_DATE()) - 2");
*/

/*
// Заменить слово 'New' на 'Hot' в фильмах в начале названия

$connect->query("update Films set movie_title = REPLACE(movie_title, 'New', 'Hot') where movie_title like 'New%'");
*/

/*люди,смотревшие определенный фильм*/

/*$listUser=$connect->query("SELECT Users.name,Films.movie_title
FROM List INNER JOIN Users ON List.id_users=Users.id
INNER JOIN Films ON List.id_films=Films.id GROUP BY id_users,id_films
HAVING movie_title='Logan';");
$view = $listUser->fetch_all();
echo"все люди, которые смотрели фильм с названием 'Logan':"; /*- введите свое название';*/
//print_r($view);

/*люди от 25 до 30 лет, смотревшие определенный фильм

//$ageUsersFromTo=$connect->query("SELECT Users.name,Users.age,Films.movie_title
FROM List INNER JOIN Users ON List.id_users=Users.id
INNER JOIN Films ON List.id_films=Films.id GROUP BY id_users,id_films
HAVING movie_title='Logan' AND age>=25&&age<=30;");
$ageFromTo = $ageUsersFromTo->fetch_all();
echo"все люди, которые смотрели фильм с названием 'Logan' в возрасте от 25 до 30 лет:"; /*- введите свое название';*/
//print_r($ageFromTo);*/

/*все люди,которые не смотрели определенный фильм*/

/*$didntWatchList = $connect->query("select * from Users as u where u.id not in (select distinct l.id_users
from List as l inner join Films as f on f.id = l.id_films where f.movie_title = 'Logan')");
$didntWatch=$didntWatchList->fetch_all();
echo 'Все, кто не смотрел фильм Логан:';
print_r($didntWatch);*/


/*кассовые сборы больше 50000 и меньше 100000

//$cashBox=$connect->query("SELECT Films.movie_title,Films.cash
FROM Films WHERE Films.cash>=50000 && Films.cash<=100000 ORDER BY Films.cash DESC;");
$cash = $cashBox->fetch_all();
echo"Все фильмы с кассовыми сборами больше 50000 и меньше 100000:";
print_r($cash);*/

/*Все просмотренные фильмы по id

//$viewsOfAUser=$connect->query("SELECT Users.id,Users.name,Films.movie_title
FROM Users,Films WHERE Users.id=3 ORDER BY Films.movie_title ASC");
$viewUser = $viewsOfAUser->fetch_all();
echo"Все фильмы, которые посомтрел - введенный человек( по id челоека):";
print_r($viewUser);*/

/*Даты просмотра фильма по id фильма и человека */

/*$viewsId=$connect->query('SELECT List.date_views,Users.id,Users.name
FROM List LEFT JOIN Users ON List.id_users=Users.id
WHERE List.id_users=3 AND List.id_films=1 ORDER BY List.date_views ASC');
$Idviews=$viewsId->fetch_all();
print_r($Idviews);*/

/*Все даты просмотра фильма по id фильма */

/*$viewsFilmId=$connect->query('SELECT List.date_views,Films.movie_title
FROM List LEFT JOIN Films ON List.id_films=Films.id WHERE Films.id=3 ORDER BY List.date_views ASC');
$films_id=$viewsFilmId->fetch_all();
print_r($films_id); */

/*Фильмы, просмотренные человеком за поределенный период*/

/*$moviesWatched = $connect->query("select distinct f.id, f.movie_title from List as l
inner join Films as f on f.id = l.id_films where l.id_users = 1 and l.date_views
between DATE('2017-01-01') and DATE('2017-05-01')");
$watched=$moviesWatched->fetch_all();
echo 'Фильмы, просмотренные за определенный период:';
print_r($watched);*/

/*Люди,смотревшие определенный фильм больше 2 раз*/

/*$watchFilm=$connect->query("SELECT Users.name,Films.movie_title,COUNT(*)
FROM List INNER JOIN Users ON List.id_users=Users.id
INNER JOIN Films ON List.id_films=Films.id GROUP BY id_users,id_films
HAVING COUNT(*)>2 AND Films.movie_title='Logan';");
$wathing=$watchFilm->fetch_all();
print_r($wathing);*/

 /* список фильмов, на которые ходили больше 1 раза*/

/*$howMany3=$connect->query("SELECT Users.name,Films.movie_title,COUNT(*)
FROM List INNER JOIN Users ON List.id_users=Users.id
INNER JOIN Films ON List.id_films=Films.id GROUP BY id_users,id_films
HAVING COUNT(*)>1;");
$how = $howMany3->fetch_all();
echo'список фильмов, на которые ходили больше 1 раза:';
    print_r($how);*/


/*Количество просмотров каждого фильма*/

/*$howViews=$connect->query('SELECT Films.movie_title,COUNT(*) FROM List INNER JOIN Films
ON List.id_films=Films.id GROUP BY movie_title');
$numberOfViews=$howViews->fetch_all();
print_r($numberOfViews);*/

/*Количество просмотренных фильмов каждым человеком*/

/*$reviewByEach=$connect->query('SELECT Users.name, COUNT(*) FROM List LEFT JOIN Users
ON List.id_users=Users.id GROUP BY name');
$review=$reviewByEach->fetch_all();
print_r($review);*/

/*Количество просмотров каждого фильма каждым человеком*/

/*$eachFilmByEach=$connect->query('SELECT Films.movie_title,Users.name, COUNT(*) FROM List LEFT JOIN Films
 ON List.id_films=Films.id LEFT JOIN Users ON List.id_users=Users.id GROUP BY movie_title,name');
$eachByEach=$eachFilmByEach->fetch_all();
print_r($eachByEach);*/

$queryStr = 'Select * from Films';

// Handle filters.
if (!empty($_POST['filter'])) {
    $filters = [];

    if (!empty($_POST['filter']['cash'])) {
        if (!empty($cost_min = $_POST['filter']['cash']['min'])) {
            $filters[] = "cash >= $cost_min";
        }

        if (!empty($cost_max = $_POST['filter']['cash']['max'])) {
            $filters[] = "cash <= $cost_max";
        }
    }

    foreach ($_POST['filter'] as $field => $value) {
        if (!is_string($value) || empty($value)) {
            continue;
        }

        $filters[] = "$field like '%$value%'";
    }

    if (!empty($filters)) {
        $queryStr .= ' where ' . implode(' AND ', $filters);
    }
}

// Handle sorting.
if (!empty($_GET['sort']['field'])) {
    $field = $_GET['sort']['field'];
    $direction = '';

    if (!empty($_GET['sort']['direction'])) {
        $direction = $_GET['sort']['direction'];
    }

    $queryStr .= " order by $field $direction";
}

$queryResult=$connect->query($queryStr);
/*print_r($queryResult);*/

/*$films=$queryResult->fetch_assoc();
print_r($films);*/
/*$films=$queryResult->fetch_object();
print_r($films);*/
/*$films=$queryResult->fetch_row();
print_r($films);*/
/*$films=$queryResult->fetch_field();
print_r($films);*/
/*$films=$queryResult->fetch_array();
print_r($films);*/
$films=$queryResult->fetch_all(MYSQLI_ASSOC);
//print_r($films);

/*$films=[];
for ($i=0; $i< $queryResult->num_rows();$i++)
{
    $films[]=$queryResult->fetch_object();
}
$queryResult->fetch_all();
print_r($queryResult);*/

function getFilmHeaderLink($title, $field) {
    $sort_direction = 'ASC';

    // Inverse sort direction.
    if (!empty($_GET['sort']['field']) &&
        $_GET['sort']['field'] == $field &&
        $_GET['sort']['direction'] == $sort_direction) {

        $sort_direction = 'DESC';

    }

    return "<a href='/BD/Function.php?sort[field]=$field&sort[direction]=$sort_direction'>$title</a>";
}

//$count_pages = 50;/
//$active = 3;/
//$countShowPages = 5;
$url = "/BD/Function.php";
$urlPage = "/BD/Function.php?page=";
if ($count_pages > 1) {
    $left = $active - 1;
    $right = $active + 1;
    if ($left < ceil($countShowPages / 2))
        $start = 1;
    else $start = $active - ceil($countShowPages / 2);
    $end = $start + $countShowPages - 1;
    if ($end > $count_pages) {
        $start -= ($end - $count_pages);
        $end = $count_pages;
        if ($start < 1) $start = 1;
    }
}

?>
<!-- Movies filters. -->
<form action="Function.php" method="post" xmlns="http://www.w3.org/1999/html">
    <label for="movie_title">Movie Title</label>
    <input type="text" id="movie_title" name="filter[movie_title]">

    <label for="author">Author</label>
    <input type="text" id="author" name="filter[author]">

    <label for="priceMin">Min Price</label>
    <input type="text" id="priceMin" name="filter[cash][min]">

    <label for="priceMax">Max Price</label>
    <input type="text" id="priceMax" name="filter[cash][max]">

    <input type="submit" value="Filter">
</form>

<!-- Movies table. -->
<table>

    <tr>
        <th><?php echo getFilmHeaderLink('ID', 'id'); ?></th>
        <th><?php echo getFilmHeaderLink('Movie Title', 'movie_title'); ?></th>
        <th><?php echo getFilmHeaderLink('Author', 'author'); ?></th>
        <th><?php echo getFilmHeaderLink('Release Date', 'date_start'); ?></th>
        <th><?php echo getFilmHeaderLink('Duration', 'lenght'); ?></th>
        <th><?php echo getFilmHeaderLink('Price', 'cash'); ?></th>
    </tr>

    <?php  foreach ($films as $film):?>
        <tr>
            <td><?php echo $film['id']; ?></td>
            <td><?php echo $film['movie_title']; ?></td>
            <td><?php echo $film['author']; ?></td>
            <td><?php echo $film['date_start']; ?></td>
            <td><?php echo $film['lenght']; ?></td>
            <td><?php echo $film['cash']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<!--Block "Пагинация" Start"-->
<head><link type="text/css" rel="stylesheet" href="/HTML/CSS/style.css"/>
<link type="text/css" rel="stylesheet" href="/BD/ForFunction.css"/>
</head>
<body>
<div id="light-pagination" class="pagination">
    <span>Страницы: </span>
    <?php if ($active != 1){?>
    <ul>
        <li><a href="<?=$url?>" class="perv">&lt;&lt;</a></li>
        <li><a href="<?php if ($active == 2) {?><?=$url?><?php } else { ?><?=$urlPage.($active - 1)?><?php } ?>" class="prev">&lt;</a></li>
        <?php } ?>
        <?php for ($i = $start; $i <= $end; $i++) { ?>
            <?php if ($i == $active) { ?><span><?=$i?></span><?php } else { ?><a href="<?php if ($i == 1) { ?><?=$url?><?php } else { ?><?=$urlPage.$i?><?php } ?>"><?=$i?></a><?php } ?>
        <?php } ?>
        <?php if ($active != $count_pages) { ?>

        <li><a href="<?=$urlPage.($active + 1)?>" class="next">&gt;</a></li>
        <li><a href="<?=$urlPage.$count_pages?>" class="prev">&gt;&gt;</a></li>
    </ul>
</div>
<?php } ?>
<!--Block "Пагинация" End"-->
</body>
