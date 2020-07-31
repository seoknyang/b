<script type="text/javascript">
    $(function () {
        $("#login_btn").click(function () {
            if ($("#user_id").val() == "") {
                alert("아이디를 입력하세요");
                return;
            }
            if ($("#user_pass").val() == "") {
                alert("비밀번호를 입력하세요");
                return;
            }

            $("form").submit();
        });
    });
</script>
<style>
    #login_form{
        text-align: center;
    }
    #login_title{
        font-size: 20px;
    }
    #user_id{
        height: 25px;
    }
    #user_pass{
        height: 25px;
    }
    #login_btn{
        width: 180px;
        height: 30px;
    }
</style>
<form name="login_form" id="login_form" method="post" action="/LJH/login/login_check">
    <p id="login_title">로그인</p>
    <p><input type="text" name="user_id" id="user_id" placeholder="아이디"></p>
    <p><input type="password" name="user_pass" id="user_pass" placeholder="비밀번호"></p>
    <p><input type="button" id="login_btn" value="로그인"></p>
    <p><a href="/LJH/login/register">회원가입</a></p>
</form>
