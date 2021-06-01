@extends('layout.app')
@section('title','Notice')


@section('content')
    

<section class="right-panel ">   
    <div class="container">
        <p>Super Intendent / Notice List</p> <hr>
          
        <div class="vaccine pt-2 pb-5">
            @if(Session::has('/admin/notice_list'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('/admin/notice_list')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Notice Title</th>
                        <th scope="col"></th>
                        <th></th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($result as $notice)
                    <tr>
                        <th colspan="2"> <a class="text-dark" href="/district/notice_view/{{ $notice->id }}">{{ $notice->notice_title }}</a> </th>
                        <td > <p class="text-success" style="font-size:12px;">{{ $notice->created_at }}</p></td>
                        <td>
                            <a class="btn btn-success" href="/district/notice_view/{{ $notice->id }}"  ><i class="fas fa-eye"></i></a>
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