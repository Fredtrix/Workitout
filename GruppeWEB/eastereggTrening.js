$(document).ready(function() {
  /*Ligger i aside*/
  $("#eggTrening").click(function(){
	
    colorz();
    function colorz(){
/*Endrer bakgrunsfargen på styrke siden*/
    var randomColor = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
    $('#artikkelStyrke').animate( { backgroundColor: randomColor }, 75);
	
    colorz();
	
  };  
 });
});