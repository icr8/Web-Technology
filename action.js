    productname = document.getElementById("pname").textContent;
    productdes = document.getElementById("pdes").textContent;
    productprice = document.getElementById("pprice").textContent;
    message = document.getElementById("successMess").textContent;

    function popup_close(){
    
    document.getElementById("pop").style.display = "none";
    document.getElementById("body").style.filter ="blur(0px)";
    prname = document.getElementById("pname").textContent;
    prdes = document.getElementById("pdes").textContent;
    prprice = document.getElementById("pprice").textContent;
    pname.innerHTML=  productname;
    pdes.innerHTML=  productdes;
    pprice.innerHTML=  productprice;
    sucname = document.getElementById("successpname");
    sucname.innerHTML=  "";
    document.getElementById("successMess").style.color = "#885b9e";
}

function gpop_close(){
    
    document.getElementById("gpop").style.display = "none";
    document.getElementById("body").style.filter ="blur(0px)";
}

function popup_open(){
    document.getElementById("pop").style.display = "block";
    document.getElementById("body").style.filter ="blur(2px) brightness(20%)";
    document.getElementById("buy").style.display = "block";
    success = document.getElementById("successMess");
    success.innerHTML=  message;
}

function success_mess(){
    
    success = document.getElementById("successMess");
    success.innerHTML=  "You have successfully purchase:";
    success.style.color = "rgb(0, 255, 0)";
    sucname = document.getElementById("successpname");
    sucname.innerHTML=  productname;
    success = document.getElementById("pname");
    pname.innerHTML=  "";
    success = document.getElementById("pdes");
    pdes.innerHTML=  "";
    success = document.getElementById("pprice");
    pprice.innerHTML=  "";
    document.getElementById("buy").style.display = "none";
}