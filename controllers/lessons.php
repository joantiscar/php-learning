<?php





// CONSULTA SQL -> STATEMENT SQL

$lessons = Lesson::all();





require view('lessons',[$lessons]);
