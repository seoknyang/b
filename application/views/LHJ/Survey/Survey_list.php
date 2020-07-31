<form method="post">
<h1>설문조사 목록</h1>
설문조사 부서 <input type="text" name='buseo' id="buseo">
설문명 <input type="text" name='surveyname' id="surveyname">
설문마감일 <input type="text" name='surveydate' id="surveydate">
<input type="button" name='survey_btn' id="survey_btn" value="조회"><br>

<input type="button" name='add_btn' id="add_btn" value="(+)새 설문 추가"><br>

<table border="1">
    <tr>
        <th>설문명</th>
        <th>설문 조사부서</th>
        <th>참여인원</th>
        <th>마감일</th>
        <th>설문조사자</th>
        <th>관리기능</th>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="button" name='end_btn' id="end_btn" value="마감"><br>
            <input type="button" name='replay_btn' id="replay_btn" value="수정"><br>
            <input type="button" name='delete_btn' id="delete_btn" value="삭제"></td>
    </tr>
</table>

    <input type="button" name='back_btn' id='back_btn' value="◀">
    <input type="button" name='btn1' id='btn1' value="1">
    <input type="button" name='btn2' id='btn2' value="2">
    <input type="button" name='btn3' id='btn3' value="3">
    <input type="button" name='last_btn' id='last_btn' value="▶">

    <h3>설문 조사 참여 목록</h3>
    <table border="1">
        <tr>
            <th>학번 및 사번</th>
            <th>이름</th>
            <th>사용자유형</th>
            <th>상태</th>
            <th>답변일자</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <input type="button" name='back_btn2' id='back_btn2' value="◀">
    <input type="button" name='bt1' id='bt1' value="1">
    <input type="button" name='bt2' id='bt2' value="2">
    <input type="button" name='bt3' id='bt3' value="3">
    <input type="button" name='last_btn2' id='last_btn2' value="▶">
</form>