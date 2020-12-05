@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New quize</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('quizes.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('quizes.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>question:</strong>
                <input type="text" name="question" class="form-control" placeholder="Name">
               
                
            <table>
            <thead>
            <th>N</th>
            <th>პასუხი</th>
            <th>სწორი პასუხი</th>
            </thead>
            <tbody>
            <tr>
            <td> <strong>answer1:</strong></td>
            <td><input type="text" name="answer1" class="form-control" placeholder="answer1"></td>
            <td><input type="radio" name="result" value="1" ></td>
            </tr>
            <tr><td> <strong>answer2:</strong></td>
            <td><input type="text" name="answer2" class="form-control" placeholder="answer2"></td>
            <td><input type="radio" name="result" value="2" ></td></tr>
            <tr><td> <strong>answer3:</strong></td>
            <td><input type="text" name="answer3" class="form-control" placeholder="answer3"></td>
            <td><input type="radio" name="result" value="3" ></td></tr>
            <tr><td> <strong>answer4:</strong></td>
            <td><input type="text" name="answer4" class="form-control" placeholder="answer4"></td>
            <td><input type="radio" name="result" value="4"></td></tr>
            </tbody>

           
            </table>
             
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection