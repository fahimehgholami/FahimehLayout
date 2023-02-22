//document.getElementById(id)
//display or like echo
//document.write
//windows.alert
//innerHTML
//console.log
//we use let to create variables

//a simple function that triggers alert box
function hello(){
    alert("Welcome to my website.");
}


//a simple function to add 2 numbers
function add(){
    document.write(5+6);
}
//function to change the bc color of the page
function changeColor(where,newColor){
    if(where =="background"){
        document.body.style.backgroundColor =newColor;
    }
}

//create variable and use it to change the color
function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color= color;
}

//crud
//function trim(remove spaces in form)
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<4){
        alart("First name must have atleast 4 characters");
        return false;
    }
}
function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<4){
        alart("First name must have atleast 4 characters");
        return false;
    }
}