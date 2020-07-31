<script type="text/javascript">
    $(function () {
        $("#add_question_btn").click(function () {
            if(doc_num != "") {
                $.post("sv_doc_add_result", {
                    "doc_title": $("#doc_title").val(),
                    "doc_comment": $("#"doc_comment"").val(),
                    "doc_sdate": $("#doc_startdate").val(),
                    "doc_edate": $("#doc_enddate").val()
                }, function (data) {
                    doc_num = data;
                }, "text");
            }
            var pop = window.open(
                "/LHJ/Survey/sv_question_add/doc_num" + doc_num,
                "sv_pop",
                "width=900px, height=500px"
            );
            if (pop == null){
                alert("팝업차단을 해제해주세요.");
            }
        });
    });
</script>

<!--form method="post"-->
    <input type="file" name="file" id="imageFileOpenInput" accept="image/*" value="이미지 업로드">

    설문조사 명 <input type="text" name="sv_name" id="sv_name"><br>
    설문조사 설명 <textarea name="sv_name" id="sv_name"></textarea><br>
    기간설정    시작일시<input type="date" name="first_date">     종료일시<input type="date" name="end_date">
    <h3>설문항목 관리</h3>
    <table>
        <tr>
            <td colspan="4"><input type="button" name="add_question_btn" id="add_question_btn" value="(+)새 설문항목 추가"></td>
        </tr>

        <tr>
            <th>질문내용</th>
            <th>질문타입</th>
            <th>질문메타</th>
            <th>수정/삭제</th>
        </tr>

        <tr>
            <td>2020-1학기 수업난이도는 어떻습니까?</td>
            <td>단일선택</td>
            <td>항목1: 매우 어렵다 항목2: 어렵다, 항목3: 보통이다. 항목 4: 쉬운편이다, 항목 5: 매우 쉬운편이다</td>
            <td>수정/삭제</td>
        </tr>
    </table>
        <input type="button" value="미리보기" name="preview_btn">
        <input type="button" value="취소" name="cancel_btn">
        <input type="button" value="저장" name="save_btn">
<!--/form-->
