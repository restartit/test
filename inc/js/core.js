// JavaScript core ajax file

// all the core ajax functions of the project should be written here


/*
 a short description about the function should be written here
 for example: the function gets x and returns y.
*/

function insertUserInfo(form)
{
	$.ajax({
		 url: "ajax.php",
		 data:"do=insertUserInfo&"+form ,
		 async: true,
		 type: "POST",
		 success: function(result) {
			 
		  }
	});
}