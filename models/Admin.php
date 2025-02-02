<?php

include ROOT . '/db/Db.php';


define("PER_PAGE", 10);


class Admin
{
    public static function getAllData()
    {
        $db = Db::getConnection();
        $itemList = array();

        $result = $db->query('SELECT * FROM `customers`');
        $i = 0;
        while ($row = $result->fetch()) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['name'] = $row['name'];
            $itemList[$i]['surname'] = $row['surname'];
            $itemList[$i]['city'] = $row['city'];
            $itemList[$i]['orderNum'] = $row['orderNum'];
            $itemList[$i]['phone'] = $row['phone'];
            $itemList[$i]['comment'] = $row['comment'];
            $i++;
        }


        // print_r($newsItem);
        return $itemList;
    }


    public static function getPagination($sorting)
    {
        $db = Db::getConnection();
        $results_per_page = PER_PAGE;
        $sql = 'SELECT * FROM customers';
        $result = $db->query($sql);
        $number_of_results = $result->rowcount();
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $this_page_first_result = ($page - 1) * $results_per_page;
        $sql = $sorting . ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = $db->query($sql);

        $i = 0;

        $itemList = array();

        while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['name'] = $row['name'];
            $itemList[$i]['surname'] = $row['surname'];
            $itemList[$i]['city'] = $row['city'];
            $itemList[$i]['orderNum'] = $row['orderNum'];
            $itemList[$i]['phone'] = $row['phone'];
            $itemList[$i]['comment'] = $row['comment'];
            $i++;
        }

        return $itemList;
    }

    public static function getPaginationNum()
    {
        $db = Db::getConnection();
        $results_per_page = PER_PAGE;
        $sql = 'SELECT * FROM customers';
        $result = $db->query($sql);
        $number_of_results = $result->rowcount();
        $number_of_pages = ceil($number_of_results / $results_per_page);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $this_page_first_result = ($page - 1) * $results_per_page;
        $sql = 'SELECT * FROM customers LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = $db->query($sql);

        return $number_of_pages;
    }


    public static function getByID($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM customers WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $item = $result->fetch();

            return $item;
        }
    }
}
