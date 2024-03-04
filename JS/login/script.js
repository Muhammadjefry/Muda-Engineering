const form = document.querySelector("form");
let name = document.getElementById("name");
let pass = document.getElementById("pass");
let btn = document.getElementById("btn");




btn.addEventListener("click",function(){
    if(cekEmpty(name.value)){

        if(cekLength(name.value)){

            if(cekNum(name.value)){


            }else{
                window.alert("Username Cannot first a number");
            }


        }else{
            window.alert("Username must be 6 or more caracther");
        }

    }else{
        window.alert("Username Cannot be empthy");
    }
   

})

function cekEmpty(x){
    if(x.length==0){
        return false;
    }else{
        return true;
   }

}

function cekNum(x){

    if(typeof x[0]==='number'){
        console.log("gabole");
    }else{
        return true;
   }

}

function cekLength(x){
    let length = 6;
    if(x.length < length){
        return false;
    }else{
        return true;
   }

}