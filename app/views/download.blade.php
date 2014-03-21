@extends('layouts.master')

@section('title')
@parent
@stop

@section('header')
Download CSV File
@stop

@section('content')

<?php
// We'll be outputting a PDF
header('Content-type: text/csv');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.csv"');

// The PDF source is in original.pdf
readfile('Download/ExportedData.csv');
?>

@stop