<h1>설문조사 항목 만들기</h1>
<input type="file" name="file" id="imageFileOpenInput" accept="image/*" value="이미지 업로드"><br>
    문항 제목 <input type="text" name="title_txt" id="title_txt"><br>
    문항 설명 <textarea name="question_txt" id="question_txt"></textarea><br>
    필수 항목 여부 <input type="checkbox" name="whether_chk" id="whether_chk" checked>
    문항 종류 <select name="question">
        <option value="단일선택">단일선택</option>
        <option value="다중선택">다중선택</option>
        <option value="서술형">서술형</option>
        <option value="파일업로드">파일업로드</option>
    </select>

<h3>단일선택 항목 만들기</h3>    <input type="button" value="(+)답변항목 생성" name="answer_add_btn">
<input type="button" value="(+)답변항목 생성" name="answer_add_btn">
<input type="radio" name="chk_" value="매우어렵다">매우어렵다 <input type="button" name="exit_1" id="exit_1" value="X">  <input type="button" name="exit_1" id="exit_1" value="X"><br>
<input type="radio" name="chk_" value="어렵다">어렵다   <input type="button" name="exit_2" id="exit_2" value="X"><br>
<input type="radio" name="chk_" value="보통이다">보통이다    <input type="button" name="exit_3" id="exit_3" value="X"><br>
<input type="radio" name="chk_" value="쉬운편이다">쉬운편이다    <input type="button" name="exit_4" id="exit_4" value="X"><br>
<input type="radio" name="chk_" value="매우쉬운편이다">매우쉬운편이다    <input type="button" name="exit_5" id="exit_5" value="X"><br>