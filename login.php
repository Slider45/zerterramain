<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<title>Login</title>

<style>
	body {
  background-color: #efffff;
  margin:0px;
  font-family: 'Montserrat', sans-serif;
  background-size: 100% 110%;
}
h5{
	color:white;
}

h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  margin-left: 50px;
  margin-top: 50px;
  margin-bottom: 0;
  font-size:200%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#fff;
}
.login-form {
  box-sizing:border-box;
  padding-top:170px;
  padding-bottom:10%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
  width: 80%;
  line-height:3em;
  font-family: 'Montserrat', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
  border:solid 2px #333;
}

/*.login input[type="text"]:hover,
.login input[type="password"]:hover{
	border:solid 2px #333;

}
*/

.login-form input[type="button"] {
  height:40px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:5px;
  color:#333;
  text-transform:uppercase;
  font-family: 'Montserrat', sans-serif;
  cursor:pointer;
  font-size: 15px;
  	border:solid 1.8px;
}
.login-form input[type="button"]:hover{
/*	border:solid 1.8px;*/
	font-weight: bold;
}
h3{
	font-size: 20px;
}
span img{
	width: 100%;
	max-width: 400px;
	margin-top: 50px;
}
span a{
	color: white;
}

span a:hover{
	text-decoration: underline;
}

.card{
	background:url('images/loginbg.png');
	background-repeat: no-repeat;
	width: 100%;
	height:500px;
	box-shadow: 2px 2px 10px 2px #4c4c4c;
}


/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
	.card{
			margin-left: 50%;
	}
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
  span img{
  	margin-top: 100px;
  }
}

</style>

</head>
<body>
	<div class="card" style="width: 500px; margin-left: auto; margin-right:auto; margin-top:50px; border-radius:10px;">
<div class="login">
	<span style="margin-left: 40px;"></span>
  
  <div class="login-form" style="margin-top: 0;">
    
    <input type="text" placeholder="Username"/><br>
   
    <input type="password" placeholder="Password"/>
    <br>
    <input type="button" value="Login" class="login-button"/>
    <br>
    <br>
    <br>
    <span><a href="#">Forgot Password?</a></span>

    
  </div>
</div>
<span><p style="color:black; text-align: center; margin-top: 90px;">© 2019 ZerterraPh</p></span>
</body>

</html>