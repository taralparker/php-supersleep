<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 4/19/14
 * Time: 7:33 PM
 */

	include "/libchart/classes/libchart.php";
    //include "/includes/db_connect.php";
    //include "/includes/functions.php";

    $array = array();
    $query = "SELECT CONCAT(month, '/', day, '/', year), hoursSlept FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY CONCAT(year, month, day) DESC LIMIT 7";
    $result = $mysqli->query($query);


$chart = new LineChart();

	$dataSet = new XYDataSet();

    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        $dataSet->addPoint(new Point($row[0], $row[1]));
    }

	$chart->setDataSet($dataSet);

	$chart->setTitle("Sleep");
	$chart->render("generated_graphs/past7entries.png");
?>

<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Libchart line demonstration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
<img alt="Line chart" src="generated_graphs/past7entries.png" style="border: 1px solid gray;"/>
</body>
</html>
-->