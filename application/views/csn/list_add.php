<style>
	.tb1 {
		height: 70px;
		border-collapse: separate;
		border-spacing: 20px;
		margin: auto;
	}

	.add_tb {
		height: 70px;
		width: 500px;
		margin: auto;
	}


	.add_td {
		text-align: right;
	}
	#add_question_btn {
		margin-left: 63.75%;
	}
	p {
		margin-left: 58.25%;
	}

	h3 {
		text-align: center;
	}

	#doc_comment {
		width: 662px;
	}

	#doc_title {
		width: 660px;
	}
</style>
<script type="text/javascript">
	let doc_num = "";
	$(function() {
		$("#add_question_btn").click(function () {
			if (doc_num == "") {
				$.ajaxSettings.async = false;
				$.post("/csn/survey/sv_doc_add_result", {
					"doc_title": $("#doc_title").val(),
					"doc_comment": $("#doc_comment").val(),
					"doc_sdate": $("#doc_startdate").val() + " " + $("#doc_starttime"),
					"doc_edate": $("#doc_enddate").val() + " " + $("#doc_endtime")
				}, function (data) {
					doc_num = data;
					console.log(data);
				}, "text");
			}
			var pop = window.open("/csn/survey/sv_question_add/doc_num/" + doc_num,)
			$.ajaxSettings.async = true;
		});
	});
</script>
<h3>설문 추가</h3>
<table class="tb1">
	<tr>
		<th>
		설문조사 명
		</th>
		<td>
			<input type="text" name="doc_title" id="doc_title">
		</td>
	</tr>
	<tr>
		<th>
		설문조사 설명
		</th>
		<td>
			<textarea cols="40" rows="5" name="doc_comment" id="doc_comment"></textarea>
		</td>
	</tr>
	<tr>
		<th>
		기간설정
		</th>
		<td>
			시작 일시 <input type="date" name="doc_startdate" id="doc_startdate"> <input type="time" name="doc_starttime" id="doc_starttime">
			종료 일시 <input type="date" name="doc_enddate" id="doc_enddate"> <input type="time" name="doc_endttime" id="doc_endtime">
		</td>
	</tr>
</table>
		<p>추가버튼을 누르면 자동으로 저장</p>
		<input type="button" id="add_question_btn" value="새 설문항목 추가(+)">

