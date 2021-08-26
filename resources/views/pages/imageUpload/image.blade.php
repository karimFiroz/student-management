@extends('layouts.master')
@section('title','Upload Image')
@section('main_content')

<form action="file-upload" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin:20px">
        <input type="file" name="image" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

@endsection 