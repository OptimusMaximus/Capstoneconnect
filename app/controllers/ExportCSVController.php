<?php

class ExportCSVController extends BaseController {

	public function export() {

		return View::make('download_csv');

	}

	public function doneExportCSV() {
		
		$answers = ExportCSV::all();

		$file = fopen('Downloads/ExportedData.csv', 'w'); //Place the csv file in public/Downloads

		//header
		fputcsv($file, array('Evaluation ID', 'First Name', 'Last Name', 'Answered By First Name', 'Answered By Last Name', 'Question 1', 'Question 2', 'Question 3', 
			'Question 4', 'Question 5', 'Question 6', 'Question 7', 'Question 8', 'Question 9', 'Question 10'));
		
		//Get the evaluation id number
		//$eid = $answers->lists('eid', 'eid');
		//$id = $answers->lists('answered_about', 'answered_about');
		
		/*for($i = 1; $i <= count($eid); $i++) {
			if($eid[$i] == $i) {
				foreach($users as $user) {
					foreach($answers as $row) {
						fputcsv($file, array($user->first_name, $user->last_name, $row->answered_by, 
							$row->ans1, $row->ans2, $row->ans3, $row->ans4, $row->ans5, $row->ans6, $row->ans7, $row->ans8, $row->ans9, $row->ans10));
					}
				}
			}
		}*/
		
		foreach($answers as $row) {
			$user = User::find($row->answered_about);
			$answeredBy = User::find($row->answered_by);
			fputcsv($file, array($row->eid, $user->first_name, $user->last_name, $answeredBy->first_name, $answeredBy->last_name,
				$row->ans1, $row->ans2, $row->ans3, $row->ans4, $row->ans5, $row->ans6, $row->ans7, $row->ans8, $row->ans9, $row->ans10));
		}
	
		fclose($file);

		Session::flash('screenAnnounce', 'You have successfully downloaded the CSV file' );
		return Redirect::to('download_csv');
	}
}