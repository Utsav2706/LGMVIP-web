let buttons = document.querySelector('.buttons');
let btn = document.querySelectorAll('span');
let value = document.getElementById('value');
let previousScreen = document.querySelector(".previous");

for (let i=0; i < btn.length; i++){
    btn[i].addEventListener("click",function(){
        if(this.innerHTML =="="){
            value.innerHTML = eval(value.innerHTML);
        }
        else{
            if(this.innerHTML == "Clear"){
                value.innerHTML ="";
            }
       
        else{
            value.innerHTML +=this.innerHTML;
            }
        }
    })
}

// function Solve(val){
//     var v = document.getElementById('res');
//     v.value += val;
// }
// function Result(){
//     var n1 = document.getElementById('res').value;
//     var n2 = eval(n1);
//     document.getElementById('res').value=n2;
// }
// function Clear(){
//     var ip = document.getElementById('res');
//     ip.value = '';
// }
// function Back(){
//     var b = document.getElementById("res");
//     b.value = b.value.slice(0,-1);
// }