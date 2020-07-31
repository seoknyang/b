
$('.login-btn').on('click', function() {
	var id = $('.login-id').val();
	var pass = $('.login-pass').val();
	if(id === '' || pass === '') {
		alert('아이디와 비밀번호를 모두 입력해주세요.');
		return;
	}
	$('.login-form').submit();
});