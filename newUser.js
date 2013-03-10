$(document).ready(function()	{
	$('#submitNewUser').click(postNewUser());
});

function postNewUser()	{
	$.post("jdbwebservice.php",
		{fname : $("#newUserFirstName").val(), lname : $("#newUserLastName").val(), comname : $("#newUserCompanyName").val(), email : $("#newUserEmail").val() });
	$("#newUserFirstName").val("");
	$("#newUserLastName").val("")
	$("#newUserCompanyName").val("")
	$("#newUserEmail").val("")
}