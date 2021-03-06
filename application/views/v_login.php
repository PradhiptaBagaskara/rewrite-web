<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lets Write</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <div class="login-logo">
    <a href="assets/index2.html"><b>Lets Write</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" id="header-box">Sign To Access</p>
    <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
        <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
        <span id="message"></span>
      </div> 

    <form id="login-form" method="post">
      <div class="form-group has-feedback">
        <input type="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="btn-login" class="btn btn-primary btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Sign In</button>
          <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });




$('#btn-login').on('click', function(){

  var $this = $(this);
  $this.button('loading');

  $('#login-form').on('submit', function(e) {
    e.preventDefault();
      console.log("jalan");
       var email = $("#email").val().trim();
        var password = $("#password").val().trim();

    var login = function(){
      $.ajax({
            url: "<?=base_url('login/login')?>",
            type: "post",
            data: {email:email,password:password},
            cache: false,
            dataType:'json',
            success: function(data){

              $this.button('reset');
              console.log(data);
            // $('#message').html(data.message);
            $('#logText').html('Login');
            if(data.error){
             var response = $('#responseDiv').removeClass('alert-success').addClass('alert-danger').html(data.message).show();
             $("#header-box").hide();
             
             setTimeout(function(){
              response.hide();
              $("#header-box").show();
             }, 3000);
            }
            else{
              var response = $('#responseDiv').removeClass('alert-danger').addClass('alert-success').html(data.message).show();
              // $('#form-login')[0].reset();
             
              
              $("#header-box").hide();

              setTimeout(function(){
                response.hide();
                location.reload();
              }, 3000);
            }
            
 
            }
    });
    }
    setTimeout(login, 4000);

  });



});

</script>
</body>
</html>
