@extends('layout.app')
@section('title','Divisonal Director List')


@section('content')
    

<section class="right-panel ">   
    <div class="container">
        <p>Super Admin / Manage Employee / Divisional Director list</p> <hr>

        <div class="vaccine pt-5 pb-5">
            @if(Session::has('/admin/divisional_director_list'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('/admin/divisional_director_list')}}
                </div>
            @endif
            <table class="table table-hover">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">Name:</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Division</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($result as $ha)
                    <tr>
                        <th>{{ $ha->name }}</th>
                        <td >{{ $ha->employee_id }}</td>
                        <td >{{ $ha->phone_number }}</td>
                        <td >{{ $ha->email }}</td>
                        <td >{{ $ha->division }}</td>
                        <td>
                            <a class="btn btn-danger" href="/admin/deleteDI/{{ $ha->id }}"><i class="fas fa-trash-alt"></i></a>
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