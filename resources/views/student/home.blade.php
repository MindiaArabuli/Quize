@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>quize</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('quizes.create') }}"> Create New quize</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>question</th>
                            <th></th>
                            
                        </tr>
                        @foreach ($question as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->question }}</td>
                            
                        </tr>
                        <tr>
                            @foreach ($answer as $ans)
                                @if(@ans->questionID==$product->id)
                                <td>{{ $ans->Answer }}</td>
                                <td><input type="checkbox" name="anscheck" value="{{$ans->iscorrect}}"></td>
                                @endif
                          
                            @endforeach
                            
                        </tr>
                        @endforeach
                        </table>
            </div>
                
      
                
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection