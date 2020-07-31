// 설문조사 항목 추가 팝업 창으로.
$('#new_item').on('click', function () {
    window.open('create_item', "PopupWin", "width=500,height=800, resizable=yes, scrollbars=yes, toolbar=yes");
});

$('#create_save').on('click', function () {
    $('#main_survey').submit();
});