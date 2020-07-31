<script type="text/javascript">
    $(function () {
        $("#regi_btn").click(function () {
            var chk_form = [
                {'target': '아이디를', 'name': 'user_id'},
                {'target': '비밀번호을', 'name': 'user_pw'},
                {'target': '이름을', 'name': 'user_name'},
                {'target': '성별을', 'name': 'user_gender'},
                {'target': '핸드폰을', 'name': 'user_phone'},
                {'target': '생년월일을', 'name': 'user_birth'}
            ];

            var exists = true;
            //row는 chk_form을 한줄씩 읽은 것이다.
            chk_form.forEach(function (row) {
                if (exists) {
                    if ($("#" + row["name"]).val() == "") {
                        alert(row["target"] + "입력해주세요");
                        exists = false;
                    }
                }
            });

            //post방식으로 접근하겠다
            $.post("id_chk", {'user_id': $("#user_id").val()}, function(data){
                if (data == "X"){
                    alert("이미 아이디가 존재합니다.");
                    event.preventDefault();
                }
                else {
                    if (exists) {
                        $("form").submit();
                    }
                }
            }, "text");
        });
    });
</script>
<form action="/LJH/login/register_ok" method="post">
    <table border="1" cellspacing="0">
        <tr>
            <td>아이디: </td>
            <td>
                <input type="text" name="user_id" id="user_id">
            </td>
        </tr>
        <tr>
            <td>비밀번호: </td>
            <td>
                <input type="password" name="user_pw" id="user_pw">
            </td>
        </tr>
        <tr>
            <td>이름: </td>
            <td><input type="text" name="user_name" id="user_name"></td>
        </tr>
        <tr>
            <td>성별: </td>
            <td>
                <label><input type="radio" name="user_gender" value="F">여자</label>
                <label><input type="radio" name="user_gender" value="M">남자</label>
            </td>
        </tr>
        <tr>
            <td>핸드폰: </td>
            <td>
                <input type="text" name="user_phone" id="user_phone">
            </td>
        </tr>
        <tr>
            <td>생년월일: </td>
            <td>
                <input type="text" name="user_birth" id="user_birth">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="button" id="regi_btn" value="확인">
            </td>
        </tr>
    </table>
</form>