<?php
$servername = "localhost";
$username = "root";
$password = "root";
try{
	$conn = new PDO("mysql:host=$servername;dbname=movie", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $sql."<br>".$e->getMessage();
}
function getID($movie_name, $conn){
	try{
		$sql = "SELECT movie_id FROM movie_info_test WHERE movie_name = '".$movie_name."'";
		//echo $sql."<br>";
		$query = $conn->prepare($sql);
		$query->execute();
		$list = $query->fetchAll();
		//echo $list[0][0]."<br>";
		return $list[0][0];
	}
	catch(PDOException $e){
		echo $sql."<br>".$e->getMessage();
	}
}
$myfile = fopen("/Applications/MAMP/htdocs/movie_recommendation/resources/test.csv", "w");

$list = array(
	array(getID(addslashes($_POST["movie_id_1"]),$conn), $_POST["ratings_1"]),
	array(getID(addslashes($_POST["movie_id_2"]),$conn), $_POST["ratings_2"]),
	array(getID(addslashes($_POST["movie_id_3"]),$conn), $_POST["ratings_3"]),
	array(getID(addslashes($_POST["movie_id_4"]),$conn), $_POST["ratings_4"]),
	array(getID(addslashes($_POST["movie_id_5"]),$conn), $_POST["ratings_5"])
);
//echo getID(123, $conn);
$txt = " ".$_POST["name"]."\t".$_POST["ratings"]."\n";

foreach ($list as $fields) {
	fputcsv($myfile, $fields);
}
fclose($myfile);
//$commend0 = ""
//$commend0 = "rm /Applications/MAMP/htdocs/movie_recommendation/resources/rank.txt";
//exec($commend0);
//sleep(1.0);
//echo exec("ls -a");
//sleep(1.0);
//$commend2 = "cd /Applications/MAMP/htdocs/movie_recommendation/neural_collaborative_filtering-master && python NeuMF_latest.py --mode predict --dataset ml-1m --epochs 20 --batch_size 256 --num_factors 8 --layers [64,32,16,8] --reg_mf 0 --reg_layers [0,0,0,0] --num_neg 4 --lr 0.001 --learner adam --verbose 1 --out 1";
//exec($command2);
//echo "1";
sleep(5);
$output = fopen("/Applications/MAMP/htdocs/movie_recommendation/resources/rank.txt", "r");
$ranks = fgets($output);
$ranks = str_replace("[", "", $ranks);
$ranks = str_replace("]", "", $ranks);
$ranks = explode(",", $ranks);
$idx = 1;
foreach ($ranks as $rank){
	try{
		$sql = "SELECT movie_name FROM movie_info_test WHERE movie_id = '".trim($rank)."'";
		//echo $sql."<br>";
		$query = $conn->prepare($sql);
		$query->execute();
		$list = $query->fetchAll();
		echo "<p>".$list[0][0]."</p>";
		/*echo "<li>".$list[0][0]."</li>";*/

		$idx = $idx + 1;
	}
	catch(PDOException $e){
		echo $sql."<br>".$e->getMessage();
	}
}

fclose($output);


//fwrite($myfile, $txt);

//fwrite($myfile, "\t".$_POST["ratings"]);
?>