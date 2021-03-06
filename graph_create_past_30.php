<?php
/**
 * Created by PhpStorm.
 * User: Tara
 * Date: 4/19/14
 * Time: 7:33 PM
 */

	include "/libchart/classes/libchart.php";

    $array = array();

    //SQL query to get last 30 entries of sleep time data
    $query = "SELECT CONCAT(month, '/', day, '/', year), hoursSlept FROM sleep_data WHERE username='$_SESSION[username]' ORDER BY year DESC, month DESC, day DESC LIMIT 30";

    $result = $mysqli->query($query);

    $chart = new LineChart();
	$dataSet = new XYDataSet();

    //Add a point on the graph for each of the 30 days
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        $dataSet->addPoint(new Point($row[0], $row[1]));
    }

	$chart->setDataSet($dataSet);

    //Generate and save the chart.
	$chart->setTitle("Sleep");
	$chart->render("generated_graphs/past30entries.png");
?>
