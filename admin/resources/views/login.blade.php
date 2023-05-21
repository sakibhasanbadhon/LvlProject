
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

@extends('layout.app2')
@section('title','login')


<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
  
          <div class="px-5 ms-xl-4">
            {{-- <i class=" mb-5 fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i> --}}
            <span class="h1 fw-bold mb-0"><img class="pb-5 h-10 w-50" src="http://localhost/Laravel-project/images/navlogo.png" alt=""></span>
          </div>
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
            
            <form action=" " style="width: 23rem;" class="loginForm">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h3>
              <div class="form-outline mb-4">
                <input required="" name="email" value="" type="text"  class="mb-2 form-control form-control-lg" placeholder="Enter email address" />
                <label class="form-label" for="form2Example18">User Name</label>
              </div>
  
              <div class="form-outline mb-4">
                <input required="" name="password" value="" type="password"  class="mb-2 form-control form-control-lg" placeholder="Enter password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>
  
              <div class="pt-1 mb-4">
                <button name="submit" type="submit" class="btn btn-info btn-lg btn-block">Login</button>
              </div>
  
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#">Forgot password?</a></p>
              <p>Don't have an account? <a href="#" class="link-info">Register here</a></p>
  
            </form>
  
          </div>
  
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="https://i.pinimg.com/564x/6b/14/04/6b1404f84fc648a1c6dd846a037643bc.jpg"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>



@section('script')

	<script type="text/javascript">

    $('.loginForm').on('submit',function(event){
      event.preventDefault();

      let formData = $(this).serializeArray();
      let userName =  formData[0]['value'];
      let passaword = formData[1]['value'];

      let url="/onLogin";

      axios.post(url,{
        user:userName,
        pass:passaword
      })
      .then(function(response) {
        if (response.status==200 && response.data==1) {
          window.location.href="/";

        }else{
          toastr.error('Login faild !');
        }

      })
      
      .catch(function (error) {
        toastr.error('Login faild ! Try Again');
      })



    })


  </script>

@endsection