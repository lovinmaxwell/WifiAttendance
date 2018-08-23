$(document).ready(function(){  
$("#submit").click(function(){
var id = $("#id").val();
var device1 = $("#device1").val();
var selectdate = $("#selectdate").val();
var category = $("#category").val();
var department= $("#department").val();

if(id ==''|| device1==''|| select==''|| category==''|| department==''){
alert("Insertion Failed Some Fields are Blank....!!");   	
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("add.php",{id:id1,device1:device11,selectdate:selectdate1,category:category1,department:department1},
			function(data) {
			alert(data);
			$('#form')[0].reset(); //To reset form fields
			});
    
    }
});
});

