<script>
 /*   $(function () {
        let doc_num = "<?=$doc_num;?>";
        $('#add_question_btn').click(function () {
            if(doc_num != ""){
            $.post("/LJS/sulmun/sv_doc_add_result",{
                "doc_title": $('#doc_title').val(),
                "doc_comment": $('#doc_comment').val(),
                "doc_sdata": $('#doc_startdata').val(),
                "doc_edata": $('#doc_endtdata').val()
            }, function (data) {
                doc_num = data;
            },"text");


            }
            var pop = window.open('/ljs/sulmun/sulmun_add/doc_num/' + doc_num,"sv_pop","width:900px","height:500px");

        })

    })  */
 $(function () {
     $('#add_sulmun').click(function () {

         window.open("/LJS/sulmun/list_sulmun", "pop", "width:900px height:500px");

     });
 });

</script>
<style>
    input[type = "button"]{
        width: 200px;
    }
    input[type = "text"]{
        height: 30px;
    }
    .a{
        width: 1000px;
        text-align: center;
    }
    .a td{
        border: 1px solid black;
        width: 150px;
        height: 50px;
    }
    .a .b{
        background: #3498db;
    }
    .aa{
        height: 200px;
    }
    #add_sulmun{
        margin-left: 800px;
    }
</style>
<table>
    <tr>
        <td>설문 조사 부서 <input type="text"></td>
        <td> 설문 명 <input type="text"></td>
        <td> 설문 마감일 <input type="text"></td>
        <td><input type="button" value="조회"></td>
    </tr>
</table>
<br>
<input type="button" value="설문 추가" id="add_sulmun">
<table class="a">
    <tr class="b">
        <td>설문명</td><td>설문 조사부서</td><td>참여인원</td><td>마감일</td><td>설문조사자</td><td>관리기능</td>
    </tr>
    <tr class="aa">
        <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td>a</td>
    </tr>
</table>

