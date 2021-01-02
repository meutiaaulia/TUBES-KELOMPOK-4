@extends('adminPanel.template.layout',[
'title'=>'Task'
])
@section('content')
<div class="container mt-5">
    {{-- active --}}
    <div class="row p-2 align-items-center">
        <h1 class="h1 mr-auto">All Task</h1>
        <div class="p-2">
            <a href="{{route('admin.task.create')}}">
                <button class="btn btn-primary font-weight-bold p-2">Add Task</button>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->created_at->format('D, d-M-Y')}}</td>
                    <td>
                        <a href="{{route('admin.task.show',['task'=>$item])}}"><button
                                class="badge badge-primary">Detail</button></a>
                        <a href="{{route('admin.task.edit',['task'=>$item])}}"><button
                                class="badge badge-info">Edit</button></a>
                        <form action="{{route('admin.task.destroy',['task'=>$item])}}" method="POST">
                            @csrf @method('DELETE')
                            <button class="badge badge-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$task->links()}}
    </div>
</div>
@endsection