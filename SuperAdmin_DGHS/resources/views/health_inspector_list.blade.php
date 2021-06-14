@extends('layout.app')
@section('title','Health Inspector List')


@section('content')
    

<section class="right-panel ">   
    <div class="container">
        <p>Super Admin / Manage Employee / Health Inspector list</p> <hr>

        <div class="vaccine pt-5 pb-5">
            <table class="table table-hover">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Name:</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Division</th>
                        <th scope="col">District</th>
                        <th scope="col">Upazilla</th>
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
                        <td >{{ $ha->district }}</td>
                        <td >{{ $ha->upazilla }}</td>
                        <td>
                            <a class="btn btn-danger" href="/admin/deleteSI/{{ $ha->id }}"><i class="fas fa-trash-alt"></i></a>
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