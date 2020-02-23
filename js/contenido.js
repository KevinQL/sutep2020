let num_pg1 = document.querySelector(".num-pg-noti1");
let num_pg2 = document.querySelector(".num-pg-noti2");
let num_pg3 = document.querySelector(".num-pg-noti3");
let num_pg_anterior = document.querySelector(".num-pg-anterior");
let num_pg_siguiente = document.querySelector(".num-pg-siguiente");

num_pg1.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
})
num_pg2.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
})
num_pg3.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
})


num_pg_anterior.addEventListener('click',function(e){
    e.preventDefault();
    let num_para_sig = Number(num_pg1.innerHTML);    
    obtener_Noticia(num_para_sig-1,"<-");

    num_pg3.innerHTML = --num_para_sig;
    num_pg2.innerHTML = --num_para_sig;
    num_pg1.innerHTML = --num_para_sig;

    boton_de_disabled()
})
num_pg_siguiente.addEventListener('click',function(e){
    e.preventDefault();
    let num_para_sig = Number(num_pg3.innerHTML);
    obtener_Noticia(num_para_sig+1,"->");

    num_pg1.innerHTML = ++num_para_sig;
    num_pg2.innerHTML = ++num_para_sig;
    num_pg3.innerHTML = ++num_para_sig;
    
    boton_de_disabled()
})



//In-habilita el boton de anterior cuando se llega al tope mínimo de paginación
function boton_de_disabled(){
    if(Number(num_pg1.innerHTML) == 1){
       document.getElementById('disable-ant').classList.add('disabled');
    }else{
       document.getElementById('disable-ant').classList.remove('disabled');
    }
}

//Traer noticias
function obtener_Noticia(num_limit, orientacion){
    console.log(orientacion, num_limit);
}