<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/students/create', function(){
    $student = new Student();
    $student->firstname='Jay';
    $student->lastname='Maunes';
    $student->email='jaymaunes4@gmail.com';
    $student->age = 12; 
    $student->save();
    return 'Student Created!';

});
Route::get('/students', function(){
    $student = Student::all();
    return $students;
});

Route::get('/student/update', function(){
    $student = Student::where('email','jaymaunes@gmail.com')->first();
    $student->email = 'jaymaunes4@gmail.com';
    $student->save();
    return 'Student updated!';

});

Route::get('/students/delete', function(){
    $student = Student::where('email', 'jaymaunes4@gmail.com')->first();
    $student->delete();

    return 'Student Deleted!';
});


