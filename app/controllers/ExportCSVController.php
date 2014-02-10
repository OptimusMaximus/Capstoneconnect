<?php

class ExportCSVController extends BaseController {

	public function export() {
		// Database Connection

		/*$host = "localhost";
		$username = "root";
		$password = "";
		$database = "capstone_connect"; 

		$connection=mysqli_connect($host,$username,$password,$database); 

		//echo mysql_error();

		// Fetch Record from Database

		$output = "";
		//$table = "users"; // Enter Your Table Name 
		$sql = 'select * from users';
		$result = mysqli_query($sql, $connection);
		$columns_total = mysql_num_fields($result);

		// Get The Field Name

		for ($i = 0; $i < $columns_total; $i++) {
			$heading = mysql_field_name($result, $i);
			$output .= '"'.$heading.'",';
		}
		$output .="\n";

		// Get Records from the table

		while ($row = mysql_fetch_array($result)) {
			for ($i = 0; $i < $columns_total; $i++) {
				$output .='"'.$row["$i"].'",';
			}
			$output .="\n";
		}

		// Download the file

		$filename = "myFile.csv";
		header('Content-type: application/csv');
		header('Content-Disposition: attachment; filename='.$filename);

		echo $output;
		exit;*/

		$table = ExportCSV::all();
		$file = fopen('Downloads/ExportedData.csv', 'w');
		foreach($table as $row) {
			fputcsv($file, array($row));
		}
		fclose($file);
	}
}