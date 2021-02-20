var cartremovebutton=document.getElementsByClassName('cancel-btn');
for(var i=0;i<cartremovebutton.length;i++){
var button=cartremovebutton[i]
button.addEventListener('click',function(event){
var buttonclicked=event.target
buttonclicked.parentElement.parentElement.remove();
})
}
