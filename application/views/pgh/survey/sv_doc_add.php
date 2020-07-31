<script type="text/javascript">
	let doc_num = "";
	$(function(){
		$("#add_question_btn").click(function(){
			if (doc_num == "") {
				$.post("/pgh/survey/sv_doc_add_result", {
					"doc_title": $("#doc_title").val(),
					"doc_comment": $("#doc_comment").val(),
					"doc_sdate": $("#doc_startdate").val() + " " + $("#doc_starttime").val() + ":00",
					"doc_edate": $("#doc_enddate").val() + " " + $("#doc_endtime").val() + ":00"
				}, function (data) {
					doc_num = data;
					console.log(data);
				}, "text");
			}
			var pop = window.open("/pgh/survey/sv_question_add/doc_num/" + doc_num, "sv_pop", "width=900px, height=500px");
		});
	});
</script>

<div class="sv_form">
	<h2>설문항목 추가</h2>
	<table class="simple_board">
		<tr>
			<th>설문조사 명</th>
			<td><input type="text" name="doc_title" id="doc_title" style="width: 100%;"></td>
		</tr>
		<tr>
			<th>설문조사 설명</th>
			<td><textarea name="doc_comment" id="doc_comment" style="width: 100%; height:80px;"></textarea></td>
		</tr>
		<tr>
			<th>기간 설정</th>
			<td>
				시작 일시 <input type="date" name="doc_startdate" id="doc_startdate"> <input type="time" name="doc_starttime" id="doc_starttime">
				종료 일시 <input type="date" name="doc_enddate" id="doc_enddate"> <input type="time" name="doc_endttime" id="doc_endtime">
			</td>
		</tr>
	</table>
	<div class="sv_question_form">
		<p class="fr">항목 추가시 자동으로 설문이 저장됩니다.</p>
		<div class="cb"></div>
	</div>
	<table class="simple_board">
		<tr>
			<th colspan="4" style="text-align: right;">
				<input type="button" id="add_question_btn" value="(+) 항목 추가">
			</th>
		</tr>
		<tr>
			<th>질문 내용</th>
			<th>질문 타입</th>
			<th>질문 메타</th>
			<th>수정/삭제</th>
		</tr>
	</table>
<div/>
