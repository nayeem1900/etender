<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('backend/admin_panel/plugins/jquery/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
       /* height: 320px;*/
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }

</style>
<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Signup form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('supplier.store')}}" method="post">
                        @csrf
                        <h3 class="text-center text-info">Signup</h3>
                        <div class="form-group">
                            <label for="fullname" class="text-info">Full Name:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="text-info">Organization Name:</label><br>
                            <input type="text" name="organization" id="organization" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="text-info">Mobile NO:</label><br>
                            <input type="text" name="mobile" id="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="text-info">Confirm Password:</label><br>
                            <input type="password" name="confirmation_password" id="confirmation_password" class="form-control">
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Signup">
                            <i class="fa fa-user"></i>Have you Account?<a href="{{route('supplier.login')}}"><span>Login Here</span></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {


        $('#login-form').validate({
            rules: {
                "name": {
                    required: true,

                },
                "email": {
                    required: true,


                },
                "mobile": {
                    required: true,


                },
                "password": {
                    required: true,
                    minlength:6,

                },
                "confirmation_password": {
                    required: true,
                    equalTo:'#password',

                }
            },

            messages: {
                name:{
                    required:'Please Enter User Name',
                },
                email:{
                    required:'Please Enter Email',
                },
                mobile:{
                    required:'Please Enter Mobile',
                },
                password:{
                    required:'Please Enter Password',
                },
                confirmation_password:{
                    required:'Please Enter Password',
                }

            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
<!-- jquery-validation -->
<script src="{{asset('backend/admin_panel/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/admin_panel/plugins/jquery-validation/additional-methods.min.js')}}"></script>

</body>
</html>