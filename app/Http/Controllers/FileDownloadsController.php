<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Curriculum;
use App\Submission;
use Illuminate\Http\Request;

class FileDownloadsController extends Controller
{
    public function curriculumdownload($id) {
        $file = Curriculum::find($id);
        $file_name = $file->file;
        $pathToFile = public_path('storage/files/'.$file_name);
        return response()->download($pathToFile);
    } 
  
      public function assignmentdownload($id){
          $assignment = Assignment::find($id);
          $file_name = $assignment->file;
          $pathToFile = public_path('storage/assignments/'.$file_name);
          return response()->download($pathToFile);    
      }

      public function submissiondownload($id){
        $submission = Submission::find($id);
        $file_name = $submission->file;
        $pathToFile = public_path('storage/submissions/'.$file_name);
        return response()->download($pathToFile);    
    }
}
