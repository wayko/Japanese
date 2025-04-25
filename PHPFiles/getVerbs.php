<?php

	require 'dbconfig.php';

	$sql = "Select kanji, romaji, english, japanese_sentence, romaji_english from jlpt_n5_verbs";
	$results = $con->query($sql);

	 echo "<table class='table table-bordered table-striped'>";
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<th>Kanji</th>";
                    echo "<th>Romaji</th>";
                    echo "<th>English</th>";
                    echo "<th>Japanese Sentence</th>";
                    echo "<th>Romaji & English</th>";
                    echo "</tr>";
    while($row = $results->fetch_assoc())
    {
       echo "<tr>";
       echo "<td>";
       echo $row['kanji'];
       echo "</td>";
        echo "<td>";
       echo $row['romaji'];
       echo "</td>";
        echo "<td>";
       echo $row['english'];
       echo "</td>";
        echo "<td>";
       echo $row['japanese_sentence'];
       echo "</td>";
        echo "<td>";
       echo $row['romaji_english'];
       echo "</td>";
       echo "</tr>";
    }
    
    $results->free();
    $con->close();

	
?>