<title>Document</title>
    <!--script src="//code.jquery.com/jquery-3.3.1.min.js"></script-->
    <script type="text/javascript">
        $(function(){
            $("#login_btn").click(function(){
                if ($("#user_id").val() == ""){
                    alert("아이디를 입력하세요.");
                    return;
                }
                 if ($("#user_pass").val() == ""){
                     alert("비밀번호를 입력하세요.");
                     return;
                 }

            $("form").submit();
        });
    });
    </script>

    <style type="text/css">
        body{
            margin:0px auto;
        }
        .top1{
            background-color : #4B5A4B;
            color: #4B5A4B;
            width: 100%;
            height: 20px;
        }
        .top2{
            background-color : #E0CFC5;
            color: #E0CFC5;
            width: 100%;
            height: 80px;
        }
        h1{
            text-align: center;
            font-size: 50px;
            font-family: Georgia, "Malgun Gothic", serif;
        }
        table{
            margin:0px auto;
            font-weight:bold;
        }
        #login_page{
            padding-top: 80px;
        }
        #login_btn{
            background-color: black;
            color: white;
            border-radius:5px;
            border:1px solid black;
            padding:25px;
            margin:5px;
        }
        #login_page legend{
            display: none;
        }
        #login_page fieldset{
            width:500px;
            margin:50px auto;
            border:5px solid black;
            padding:40px;
            border-radius:15px;
        }
        #login_page a{
            padding-left:45%;
            text-decoration: none;
            a:link{color:black};
            a:visited{color:green};
            font-weight:bold;
        }
    </style>

<!--/head-->

<body>
    <div class="top1">1</div>
    <div class="top2">2</div>

        <div id="login_page">
            <h1>member login</h1>
            <fieldset>
                <legend>Member Loin</legend>
                <form action="/LHJ/login/login_check" method="post" name="login_form">
                    <table>
                        <tr>
                            <td>아이디</td>
                            <td><input type="text" name='user_id' id="user_id" placeholder="USER ID"></td>
                            <td rowspan="2"><input type="button" value="Login" id = "login_btn" style="cursor:pointer"></td>
                        </tr>

                        <tr>
                            <td>비밀번호</td>
                            <td><input type="password"  name='user_pass' id="user_pass" placeholder="USER PASSWORD"></td>
                        </tr>

                        <tr>
                            <td colspan="3"><p><a href="/LHJ/login/register">>>회원가입으로 접속하기</a></p></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
</body>
</html>