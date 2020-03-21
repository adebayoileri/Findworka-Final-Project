@extends('inc.tutor')

@section('content')
<form class="forms-sample">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="course">Course</label>
      <input type="email" class="form-control" id="course" placeholder="Course Name">
    </div>
    {{-- <div class="form-group">
      <label>File upload</label>
      <input type="file" name="file" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" placeholder="Upload Assignment File">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
        </span>
      </div>
    </div> --}}
    <div class="form-group">
        {{Form::file('photo')}}
    </div>
    <div class="form-group">
      <label for="Instructions">Remarks</label>
      <input type="text" class="form-control" id="remarks" placeholder="Remarks">
    </div>
    <button type="submit" class="btn btn-success mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
  </form>
@endsection