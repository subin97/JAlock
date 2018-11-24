<head>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style media="screen">
body{
  font-family: 'Nanum Gothic', sans-serif;
}
:root {
--input-padding-x: 1.5rem;
--input-padding-y: .75rem;
}

body {
background: rgb(209, 164, 175);
/* fallback for old browsers */
/* background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
/* Chrome 10-25, Safari 5.1-6 */
/* background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB); */
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.card-signin {
border: 0;
border-radius: 1rem;
box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
margin-bottom: 2rem;
font-weight: 300;
font-size: 1.5rem;
}

.card-signin .card-body {
padding: 2rem;
}

.form-signin {
width: 100%;
}

.form-signin .btn {
font-size: 80%;
border-radius: 5rem;
letter-spacing: .1rem;
font-weight: bold;
padding: 1rem;
transition: all 0.2s;
}

.form-label-group {
position: relative;
margin-bottom: 1rem;
}

.form-label-group input {
border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
position: absolute;
top: 0;
left: 0;
display: block;
width: 100%;
margin-bottom: 0;
/* Override default `<label>` margin */
line-height: 1.5;
color: #495057;
border: 1px solid transparent;
border-radius: .25rem;
transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
color: transparent;
}

.form-label-group input:-ms-input-placeholder {
color: transparent;
}

.form-label-group input::-ms-input-placeholder {
color: transparent;
}

.form-label-group input::-moz-placeholder {
color: transparent;
}

.form-label-group input::placeholder {
color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
padding-top: calc(var(--input-padding-y) / 3);
padding-bottom: calc(var(--input-padding-y) / 3);
font-size: 12px;
color: #777;
}


</style>
<script type="text/javascript">
function checkid(){
	var nickname = document.getElementById("inputEmail").value;
	if(nickname)
	{
		url = "/jalock/front_editor/demos/code/chkid.php?nickname="+nickname;
			window.open(url,"chkid","width=300,height=100");
		}else{
			alert("닉네임을 입력하세요");
		}
	}
</script>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body check">
            <h5 class="card-title text-center">회원가입</h5>
              <!-- <p id="id_check">닉네임이 실시간으로 검사됩니다</p> -->
                <form class="form-signin" method="post" action="/jalock/front_editor/demos/code/signup_back.php">
                  <div class="form-label-group">
                    <input type="text" id="inputEmail" name="nickname" class="form-control" placeholder="Your nickname" required autofocus>
                    <label for="inputEmail">닉네임</label>
                  </div>
                  <div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" onClick="checkid()">중복 검사</button>
                  </div>
                  <hr>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">비밀번호</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">회원가입</button>
                </form>
              </div>
            </div>

      </div>
    </div>
  </div>
</body>
