<script>

    $(function () {
        $('#sel').on('change', function () {
            if ($("#sel option:selected").val() == "1") {
                var source;
                source = "<label><input type='radio' name='chk_info' value='veryhard'>매우 어렵다</label><br>";
                source += '<label><input type="radio" name="chk_info" value="hard">어렵다</label><br>';
                source += '<label><input type="radio" name="chk_info" value="mid">보통이다</label><br>';
                //source += '<label><input type="radio" id="aaa" name="chk_info" value="textz"><input type="text" name="chk_info1" value=""></label>';

                $("#selcon").empty();

                $("#selcon").append(source);

            }
            if ($("#sel option:selected").val() == "2") {
                var source;
                source = "<label><input type='checkbox' name='chk_info' value='veryhard'>매우 어렵다</label><br>";
                source += '<label><input type="checkbox" name="chk_info" value="hard">어렵다</label><br>';
                source += '<label><input type="checkbox" name="chk_info" value="mid">보통이다</label><br>';
                //   source += '<label><input type="checkbox" id="aaa" name="chk_info" value="textz"><input type="text" name="chk_info1" value=""></label>';
                $("#selcon").empty();
                $("#selcon").append(source);
            }
            if ($("#sel option:selected").val() == "3") {
                var source;
                source = "<label><textarea name='' id='' cols='70' rows='10'></textarea></label>";
                $("#selcon").empty();
                $("#selcon").append(source);
            }
            if ($("#sel option:selected").val() == "4") {
                var source;
                source = "<label><input type='file' name='chk_info' value='veryhard'></label>";

                $("#selcon").empty();
                $("#selcon").append(source);
            }
        });

        $("#ex").click(function () {
            window.history.back();
        });
        $("#save").click(function () {

        });


        $(document).on("click", "input[name='chk_info1']", function () {
            $("#aaa").prop("checked", true);
        });
    });
</script>
<style>
    #selcon {
        background-color: #34495e;
        color: white;
        width: 100%;

        font-size: 20pt;
    }

    #selcon input[type='radio'], #selcon input[type='checkbox'] {
        width: 100px;
        height: 100px;
    }
</style>
<h2>설문조사 항목 만들기
</h2>
<div>
    문항제목<input type="text" name="title">
</div>
<div>
    문항설명<input type="text" name="dis">
</div>
<div>
    필수항목 여부<input type="checkbox" name="check">
</div>
<div>
    문항종류
    <select name="sel" id="sel">
        <option value="none">=== 선택 ===</option>
        <option value="1">단일선택</option>
        <option value="2">다중선택</option>
        <option value="3">서술형</option>
        <option value="4">파일업로드</option>
    </select>
</div>


<div id="selcon">
</div>
<div>
    <input type="button" name="save" id="save" value="저장">
    <input type="button" id="ex" value="취소">

</div>
