$(document).ready(function()	{
	$('#submitNewUser').click(postNewUser());
});

function postNewUser()	{
	$.post("jdbwebservice.php",
		{$("#newUserFirstName").val(), $("#newUserLastName").val(),$("#newUserCompanyName").val(), $("#newUserEmail").val() });
	$("#newUserFirstName").val("");
	$("#newUserLastName").val("")
	$("#newUserCompanyName").val("")
	$("#newUserEmail").val("")
}