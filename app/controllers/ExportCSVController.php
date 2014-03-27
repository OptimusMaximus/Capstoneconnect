<?php

class ExportCSVController extends BaseController {

	public function export() {

		return View::make('download_csv');

	}

	public function doneExportCSV() {
		
		$answers = ExportCSV::all();

		//Get 'eid' variable from download_csv.blade view
		$eid = Input::Get('eid');

		//file name for download
		$fileName = "Questionnaire#$eid.csv";
 
 		//Headers to allow download of csv file rather than being displayed on web page
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header('Content-Description: File Transfer');
		header("Content-type: text/csv");
		header("Content-Disposition: attachment; filename={$fileName}");
		header("Expires: 0");
		header("Pragma: public");

		//Create a file pointer connected to the output stream
		$file = fopen('php://output', 'w');

		//Header for csv file
		fputcsv($file, array('Evaluation ID', 'Student ID', 'First Name', 'Last Name', 'Answered By First Name', 'Answered By Last Name', 'Question 1', 'Question 2', 'Question 3', 
			'Question 4', 'Question 5', 'Question 6', 'Question 7', 'Question 8', 'Question 9', 'Question 10'));
		
		
		foreach($answers as $row) {
			if($row->eid == $eid) {
				$user = User::find($row->answered_about);
				$answeredBy = User::find($row->answered_by);
				fputcsv($file, array($row->eid, $user->id, $user->first_name, $user->last_name, $answeredBy->first_name, $answeredBy->last_name,
					$row->ans1, $row->ans2, $row->ans3, $row->ans4, $row->ans5, $row->ans6, $row->ans7, $row->ans8, $row->ans9, $row->ans10));
			}
		}	
		fclose($file);		
		
	}
}