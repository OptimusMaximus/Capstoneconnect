<?php

class ExportCSVController extends BaseController {

	public function export() {

		return View::make('download_csv');

	}

	public function doneExportCSV() {
		
		$table = ExportCSV::all();
		$table1 = User::all();
		$file = fopen('Downloads/ExportedData.csv', 'w'); //Place the csv file in public/Downloads
		fputcsv($file, array('First Name', 'Last Name', 'Answered By', 'Question 1', 'Question 2', 'Question 3', 'Question 4', 'Question 5', 'Question 6', 'Question 7', 'Question 8', 'Question 9', 'Question 10'));
		
		//Get the evaluation id number
		$eid = $table->lists('eid', 'eid');

		fputcsv($file, $eid);
		for($i = 1; $i < count($eid); $i++) {
			if($eid[$i] == '$i') {
				foreach($table1 as $row1) {
					foreach($table as $row) {
						fputcsv($file, array($row1->first_name, $row1->last_name, $row->answered_by, 
							$row->ans1, $row->ans2, $row->ans3, $row->ans4, $row->ans5, $row->ans6, $row->ans7, $row->ans8, $row->ans9, $row->ans10));
					}
				}
			}
		}
		fclose($file);

		Session::flash('screenAnnounce', 'You have successfully downloaded the CSV file' );
		return Redirect::to('download_csv');
	}
}