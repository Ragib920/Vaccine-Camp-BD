@extends('layout.app')
@section('title','Update Notice')


@section('content')
<section class="right-panel">

    <div class="container">
        <p>Super Admin / Manage Notice / Update Notice</p> <hr>

        <div class="notice row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row shadow bg-body rounded">
                    <div class="col-md-4 bg-secondary">
                        <img src="../images/notice.png" alt="" style="width: 100%; padding-top:100px;">
                    </div>
                    <div class="col-md-8 p-4">
                        @if(Session::has('/admin/update_notice'))
                            <div class="alert alert-success text-center pt-3" role="alert">
                                {{Session::get('/admin/update_notice')}}
                            </div>
                        @endif
                        <form method="Post" class="form-group" action="{{ '/admin/update_notice' }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$notice->id}}">
                            <h4 class="text-center pt-2">Update Notice</h4>
                            <label class="pt-4" for="">Notice Title</label>
                            <input type="text" name="notice_title" class="form-control" value="{{ $notice->notice_title }}" required>
                            <label class="pt-3" for="">Notice Title</label>
                            <textarea class="form-control" name="notice_body" style="height: 150px">{{ $notice->notice_body }}</textarea>
                            <button  type="submit" class="btn btn-info mt-3" style="width: 100%">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</section>
@endsection
