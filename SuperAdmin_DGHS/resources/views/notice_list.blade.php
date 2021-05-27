@extends('layout.app')
@section('title','Manage Notice')


@section('content')
    

<section class="right-panel ">   
    <div class="container">
        <p>Super Admin / Manage Notice / Notice List</p> <hr>
        <div class="add_category pt-2">
            <a href="{{ '/admin/create_notice' }}" class="btn btn-info"><i class="fas fa-folder-plus pe-3"></i>Create New Notice</a>
        </div>    
        <div class="vaccine pt-5 pb-5">
            @if(Session::has('/admin/notice_list'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('/admin/notice_list')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Notice Title</th>
                        <th></th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($result as $notice)
                    <tr>
                        <th>{{ $notice->created_at }}</th>
                        <td colspan="2">{{ $notice->notice_title }}</td>
                        <td>
                            <a class="btn btn-success" href="/admin/notice_view/{{ $notice->id }}"  ><i class="fas fa-eye"></i></a>
                            <a class="btn btn-warning" href="/admin/update_notice/{{ $notice->id }}"><i class="fas fa-pen-square"></i></a>
                            <a class="btn btn-danger" href="/admin/deleteNotice/{{ $notice->id }}"><i class="fas fa-trash-alt"></i></a>
                        </td>                
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $result->links() !!}
            </div>
        </div>         
    </div>
</section>     



@endsection