@extends('posts.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Justine Cellphone shop</h1><br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Add New product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-bordered ">
        <thead class="table-dark">
            <th>id#</th>
            <th>Cellphone Name</th>
            <th> Short description</th>
            <th width="280px">Action</th>
        </thead>
        @foreach ($data as $key => $value)
        <tbody>
            <td>{{ ++$i }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-secondary" href="{{ route('posts.show',$value->id) }}">Show</a> &nbsp; 
                    <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a>   &nbsp;
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tbody>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection