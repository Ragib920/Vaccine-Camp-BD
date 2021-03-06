@extends('auth_layout.app')
@section('title','Health Inspector Login')


@section('content')
<div class="container ">
    <section class="login-page clearfix ">
       <div class="row">
            <div class="col-md-3 float-start img">
            </div>
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-body rounded pe-5 ps-5 mt-5">
                <h4 class="pt-3 mb-5  d-flex justify-content-center">Health Inspector Login Panel</h4>
                <form class="loginForm">
                    <div class="form-group">
                        <label  class="form-label">Employee ID:</label>
                        <input required=" " name="employee_id" value="" type="text"  class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label  class="form-label">Password:</label>
                        <input required="" name="password" value="" type="password" name="password" class="form-control">
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="form-group col-md-6 pe-3 ps-3">
                            <button  name="submit" type="submit" class="btn btn-success button-width" href="">Login</button>
                        </div>
                        <div class="form-group col-md-6 pe-3 ps-3">
                            <a  class="btn btn-danger button-width" href="{{ '/upazilla/registration' }}">Registration</a>
                        </div>
                    
                    </div>
                </form>  
            </div>
            <div class="col-md-3 float-start img">
            </div>
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
               window.location.href="/upazilla";
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