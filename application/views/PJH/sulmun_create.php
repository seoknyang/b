<script>
    let doc_num="";

    $(function() {
        $('#add').click(function () {
            if(doc_num=="") {

                $.post("/PJH/sulmun_add", {
                    "doc_title": $("#doc_title").val(),
                    "doc_comment": $("#doc_comment").val(),
                    "doc_sdate": $("#doc_startdate").val() + " " +$("$doc_stattme").val() + ":00",
                    "doc_edate": $("#doc_enddate").val() + " " +$("$doc_enddate").val() + ":00"
                }, function (data) {
                    doc_num = data;
                    console.log(data);
                },"text");
            }
        })

        $('#ex').click(function () {
            window.history.back();
        });
        $("#save").click(function () {

        });


    });
</script>
<style>
    .aaa{
        margin: auto;
        width: 60%;
    }
    .aaa td{
        height: 100px;
        border: 1px solid black;
    }
</style>
<div>
  설문조사명: <input type="text" name="doc_title" id="doc_title"><br>
    설문조사 설명 <input type="text" name="doc_comment" id="doc_comment"><br>
    기간 설정 : 시작일시<input type="datetime-local" name="doc_startdate" id="doc_startdate">
                종료일시 <input type="datetime-local" name="doc_enddate" id="doc_enddate"><br>

</div>

<div>


</div>
<table class="aaa">
    <tr>
        <input type="button" id="add" value="새 설문항목 추가를 하시려면 클릭하십시오" onClick="location.href='/PJH/Sulmun/sulmun_add'">
    </tr>
    <tr>
        <td>질문내용</td>
        <td>질문타입</td>
        <td>질문메타</td>
        <td>수정삭제</td>
    </tr>

    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
        <td>a</td>
    </tr>

</table>
<div>
    <input type="button" name="save" id="save" value="저장">
    <input type="button" name="ex" id="ex" value="취소">

</div>
