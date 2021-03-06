@extends('auth_layout.app')
@section('title','HA login')


@section('content')
<div class="container ">
    <section class="login-page clearfix shadow-lg p-3 mb-5 bg-body rounded">
        <h4 class="mt-5 mb-5  d-flex justify-content-center">Health Assistant Login Panel</h4>
        <div class="col-md-5 float-start img">
            <img src="../images/health assistant.png" alt=""> 
        </div>
        <div class="col-md-7 float-start pe-5 ps-5 mt-5">
            <form class="loginForm">
                @if(Session::has('/word/login'))
                    <div class="alert alert-success text-center pt-3" role="alert">
                        {{Session::get('/word/login')}}
                    </div>
                @endif
                <div class="form-group">
                    <label  class="form-label">Employee ID:</label>
                    <input required=" " name="employee_id" value="" type="text"  class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label  class="form-label">Password:</label>
                    <input required="" name="password" value="" type="password" name="password" class="form-control">
                </div>
                <div class="row mt-3">
                    <div class="form-group col-md-6 pe-3 ps-3">
                        <button  name="submit" type="submit" class="btn btn-success button-width" href="">Login</button>
                    </div>
                    <div class="form-group col-md-6 pe-3 ps-3">
                        <a  class="btn btn-danger button-width" href="{{ '/word/registration' }}">Registration</a>
                    </div>
                 
                </div>
            </form>  
        </div>
    </section>
</div>
@endsection

@section('script')

<script type="text/javascript">
    $('.loginForm').on('submit',function (event) {
        event.preventDefault();
        let formData=$(this).serializeArray();
        let employee_id=formData[0]['value'];
        let password=formData[1]['value'];
        let url="/onLogin";
        axios.post(url,{
            employee_id:employee_id,
            password:password
        }).then(function (response) {
           if(response.status==200 && response.data==1){
               window.location.href="/word";
           }
           else{
               alert('Login Fail ! Please Insert correct "Employee ID & Password" and try again . ');
           }
        }).catch(function (error) {
            alert('Login Fail ! Try Again');
        })
    })
</script>
@endsection