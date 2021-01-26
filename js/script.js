$(document).ready(function(){

	$("#register").click(function(){
		$(".space").empty();
		$(".space").load("html/register.php");
	});
	$("#login").click(function(){
		$(".space").empty();
		$(".space").load("html/login.php");

	});
	$("#optiuni_admin").click(function(){
		$(".sidebar").empty();
		$(".sidebar").load("../html/optiuni_admin.html");
	});


	/*$( ".cat" ).click(function() {
		let cat = $(this).val();
		console.log(cat);
		$.ajax({
		        type: 'GET',
		        cache: false,
		        aysync: true,
		        dataType: 'json',
		        data: { categorie : cat},
		        url: "D:/XAMPP2/htdocs/Licenta - Biblioteca Online/Licenta---Platforma-Biblioteca-Online/php/show_cat.php", // cal ajax.php with ?delete=123, use $_GET['delete']
		        success: function(data){
					alert("Sunteti la categoria ");
		        }
		});
	});
*/
});
