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
