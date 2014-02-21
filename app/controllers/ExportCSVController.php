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
		return View::make('download_csv');
		/*
		$table = ExportCSV::all();
		$file = fopen('Downloads/ExportedData.csv', 'w'); //Place the csv file in downloads
		foreach($table as $row) {
			fputcsv($file, array($row));
		}
		fclose($file);*/
	}

	public function doneExportCSV()
	{

		
		$table = ExportCSV::all();
		$file = fopen('Downloads/ExportedData.csv', 'w'); //Place the csv file in downloads
		foreach($table as $row) {
			fputcsv($file, array($row));
		}
		fclose($file);

		Session::flash('screenAnnounce', 'You have successfully downloaded the CSV file!' );
		return Redirect::to('download_csv');
	}
}