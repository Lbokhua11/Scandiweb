changer();
function changer(){
    var e = document.getElementById("productType");
    var text = e.options[e.selectedIndex].text;

if(text=="DVD"){
    document.getElementById("test").innerHTML= "<label>SIZE (MB) </label><input type='text' id='size' name='size' style='margin-left:48px;background-color:white;border-radius:10px;' required>";
    document.getElementById("test1").innerHTML= "";
    document.getElementById("test2").innerHTML= "";

}
else if(text=="Furniture"){

    document.getElementById("test").innerHTML= "<label>HEIGHT (CM) </label><input type='text' id='height' name='height' style='margin-left:20px;background-color:white;border-radius:10px;' required>";
    document.getElementById("test1").innerHTML= "<label>WIDTH (CM) </label><input type='text' id='width' name='width' style='margin-left:24px;background-color:white;border-radius:10px;' required>";
    document.getElementById("test2").innerHTML= "<label>LENGTH (CM) </label><input type='text'id='length' name='length'style='margin-left:16px;background-color:white;border-radius:10px;' required>";
}
else if(text=="Book"){
   
    document.getElementById("test").innerHTML= "<label>WEIGHT (KG) </label><input type='text' id='weight' name='weight' style='margin-left:20px;background-color:white;border-radius:10px;' required>";
    document.getElementById("test1").innerHTML= "";
    document.getElementById("test2").innerHTML= "";
}
}
