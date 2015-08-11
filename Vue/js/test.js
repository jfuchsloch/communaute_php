function imageHandler(e2) 
{ 
  var store = document.getElementById('imgstore');
  store.innerHTML='<img src="' + e2.target.result +'">';
}

function loadimage(e1)
{
  var filename = e1.target.files[0]; 
  var fr = new FileReader();
  fr.onload = imageHandler;  
  fr.readAsDataURL(filename); 
}

window.onload=function()
{
  var x = document.getElementById("filebrowsed");
  x.addEventListener('change', readfile, false);
  var y = document.getElementById("getimage");
  y.addEventListener('change', loadimage, false);
}

function readerHandler(e2) 
{ 
  var store = document.getElementById('storage');
  store.innerHTML=e2.target.result; 
}

function readfile(e1)
{
  var fileobj = e1.target.files[0]; 
  var fr = new FileReader();
  fr.onload = readerHandler;  
  fr.readAsText(fileobj); 
}

window.onload=function()
{
  var x = document.getElementById("filebrowsed");
  x.addEventListener('change', readfile, false);
}