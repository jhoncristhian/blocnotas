window.onload=function(){
	var fecha = new Date();
	document.getElementById('time').innerHTML=fecha;
}

document.getElementById('show').onclick=function(){
	console.log("show");
	mostrar();
}


function mostrar(){
	var input = new FileReader('archivo.txt');
    var output = document.getElementById("tabla");


input.addEventListener("change", function () {
  if (this.files && this.files[0]) {
    var myFile = this.files[0];
    var reader = new FileReader();
    
    reader.addEventListener('load', function (e) {
      output.textContent = e.target.result;
    });
    
    reader.readAsBinaryString(myFile);
  }   
});
}
