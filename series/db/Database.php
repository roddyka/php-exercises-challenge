<?php
/**
 * Description: This Class will help us  to conect to the mysql database
 * @author Rodrigo Antunes <rodrigoka4@gmail.com>
 */
class Database
{
    /**
     * Description: Construct function to connect to the DB
     * @todo add env
     */
    function __construct()
    {
        $host = 'localhost'; //HOST NAME.
        $db_name = 'series'; //Database Name
        $db_username = 'root'; //Database Username
        $db_password = ''; //Database Password

        try
        {
            $this->pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
        }
        catch (PDOException $e)
        {
            exit('Error Connecting To DataBase');
        }
    }

    /**
     * Description: Get all data from DB
     *
     * @return void
     */
    function getData()
    {
        if($this->pdo){
            $query = $this->pdo->prepare('SELECT * FROM tv_series as A INNER JOIN tv_series_intervals as B ON A.id = B.id_tv_series ORDER BY B.week_day ASC;');
            $query->execute();
            return $query->fetchAll();
        }
    }

    /**
     * Description: Get the data from DB using the title string to found your information
     *
     * @param string $title
     * @return void
     */
    function getDataByTitle(string $title)
    {
        if($this->pdo){
            $query = $this->pdo->prepare('SELECT * FROM tv_series as A INNER JOIN tv_series_intervals as B ON A.id = B.id_tv_series WHERE A.title LIKE "%'.$title.'%";');
            $query->execute();
            return $query->fetch();
        }
    }

    /**
     * Description: Get all data from DB to the next series 
     *
     * @param string $weekDay
     * @param string $time
     * @return void
     */
    function getDataNextSerie(string $weekDay, string $time)
    {
        $query = $this->pdo->prepare('SELECT * FROM tv_series 
        as A 
        INNER JOIN tv_series_intervals as B 
        ON A.id = B.id_tv_series 
        WHERE B.week_day >= "'.$weekDay.'
        ORDER BY B.week_day ASC"
        ;');
        //AND B.show_time >= "'.$time.'"
        $query->execute();
        return $query->fetchAll();
    }
}