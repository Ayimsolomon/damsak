
// setTimeout(submit,3000);
// function submit(){
//     var suna = document.querySelector("#name").value;
//     var email = document.querySelector("#email").value;
//     var payment = ['approved','pending','declined'];
//     var number = document.querySelector("#number").value;
//     var book = document.querySelector("#book");
//     var show = document.querySelector(".show");
//     var feed1 = document.querySelector(".feed1");
//     var feed2 = document.querySelector(".feed2");
//     var feed3 = document.querySelector(".feed3");
//     var feed4 = document.querySelector(".feed4");
//     var shower =document.querySelector("#show");
//     var encode = encodeURIComponent(Math.floor(Math.random()*19999999999));
    
//     var id = document.querySelector(".id");
//     var form = document.querySelector("#form");
//     var sponsors = document.querySelector(".sponsors");

//     var spaces = 50;
//     var available = spaces - number;
//     if(suna.length ==" " && number.length ==" " && email.length ==" "){
//         alert("");
//     }
//  else if(number > 50){
    
//     show.innerHTML= " You've exceeded the space limit"; 
    
//  }
//     else{
        
//         form.style.display = "none";
//         show.style.display = "block ";
//         shower.innerHTML="Entry Card";
//         show.style.border="5px dotted #020a27";
//         show.style.backgroundImage='';
//         //id.innerHTML= encode + '_MB';
//         feed1.innerHTML='Space Id : ' + encode  + '_MB';
//         feed2.innerHTML='Space booked : ' + number;
//         feed3.innerHTML='Proceed to space token : '  + payment[Math.floor(Math.random())*2];
        
//         show.style.width = "100%";
//         alert('available space remaining : ' + available);
//         show.classList="show mt-4 p-4 mb-4";
//         sponsors.innerHTML="Sponsors" + ":" + "<span> Music Blob </span>"

//     }
// }

function subscribe(){
    var news = document.getElementById("newsletter");
    var main = document.querySelector("main");

    if(news.style.display==''){
        news.style.display= "block";
        main.style.filter = "blur(2px)";
      //  var newElement = document.createElement("button");
       // newElement.innerHTML = "&times";
       document.querySelector("body").style.overflow = "none";
       document.getElementById("times").style.display = "block";
       
       
    }
    else{
        alert("this is bad");
        news.style.display= "block";
    }
    {once:true}
}
setTimeout(subscribe,5000),{once:true};

function times(){
    var news = document.getElementById("newsletter");
    var main = document.querySelector("main");
    if(news.style.display=='block'){
        news.style.display= "none";
        main.style.filter = "blur(0px)";
      //  var newElement = document.createElement("button");
       // newElement.innerHTML = "&times";
       // document.getElementByTagName("body").appendChild(newElement);
        document.getElementById("times").style.display = "none";
       
    }
    else{
        alert("this is bad");
        news.style.display= "block";
    }
    {once:true}
}
function form(){
    let space = document.getElementById("space");

    let form = document.getElementById("form");
     if(form.style.display==="none"){
        form.style.display= "block";
     }
     else{
        form.style.display = " none";
        form.style.opacity = " 0px"
     }
}