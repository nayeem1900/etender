<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        height: 320px;
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
    <h3 class="text-center text-white pt-5">Login Verification form</h3><br/>
    <h3 class="text-center text-white pt-5">Check Your email</h3><br/>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('verify.store')}}" method="post">
                        @csrf
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="text-info">Code:</label><br>
                            <input type="text" name="code" id="code" class="form-control">
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">

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

                "email": {
                    required: true,




                },
                "code": {
                    required: true,




                }
            },

            messages: {

                email:{
                    required:'Please Enter Email',
                },

                code:{
                    required:'Please Enter code',


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