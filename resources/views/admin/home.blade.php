@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

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
                        <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>question</th>
                            
                        </tr>
                        @foreach ($question as $product)
                        <tr>
                            <td>{{ $product->ID }}</td>
                            <td>{{ $product->question }}</td>
                        
                        </tr>
                        @endforeach
                        </table>
            
                
      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 