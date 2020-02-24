let num_pg1 = document.querySelector(".num-pg-noti1");
let num_pg2 = document.querySelector(".num-pg-noti2");
let num_pg3 = document.querySelector(".num-pg-noti3");
let num_pg_anterior = document.querySelector(".num-pg-anterior");
let num_pg_siguiente = document.querySelector(".num-pg-siguiente");

num_pg1.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
    obtener_Noticia(this.innerHTML,0);
})
num_pg2.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
    obtener_Noticia(this.innerHTML,0);
})
num_pg3.addEventListener('click',function(e){
    e.preventDefault();
    console.log(this.innerHTML);
    obtener_Noticia(this.innerHTML,0);
})


num_pg_anterior.addEventListener('click',function(e){
    e.preventDefault();
    let num_para_ant = Number(num_pg1.innerHTML);    
    obtener_Noticia(num_para_ant-1,-1);

    paginacion_anterior(num_para_ant);

    boton_de_disabled();
})
num_pg_siguiente.addEventListener('click',function(e){
    e.preventDefault();
    let num_para_sig = Number(num_pg3.innerHTML);
    obtener_Noticia(num_para_sig+1,1);

    paginacion_siguiente(num_para_sig);
    
    boton_de_disabled();
})



//In-habilita el boton de anterior cuando se llega al tope mínimo de paginación
function boton_de_disabled(){
    if(Number(num_pg1.innerHTML) == 1){
       document.getElementById('disable-ant').classList.add('disabled');
    }else{
       document.getElementById('disable-ant').classList.remove('disabled');
    }
}

//obtiene noticias y novedades de la db cuando se carga la página *********************************
obtener_Noticia(1,"->");
//*****************************************************************

//Traer noticias
function obtener_Noticia(select_num_pg, orientacion){
    console.log(orientacion, select_num_pg);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){            
            $datosJSON = JSON.parse(this.responseText);
            let enumNoticia = 0;
            let $html_noti = ``;
            $datosJSON.forEach(element => {                
                enumNoticia+=1;
                $html_noti += `
                <div class="col-md-12">
                    <h4>${element.titulo}</h4>
                    <p>${element.introduccion}</p>
                    <p>${element.ruta}</p>
                    <button class="btn btn-sm btn-color-noticia" data-toggle="modal" data-target="#staticBackdrop${enumNoticia}">ver mas</button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop${enumNoticia}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop${enumNoticia}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title titulo_noticia" id="staticBackdrop${enumNoticia}Label">${element.titulo}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="">
                                <img src="img/${element.ruta}" alt="" class="img-fluid">
                            </div>
                            <p class="my-2 descripcion_not">
                                ${element.introduccion}
                            </p>
                            <p class="my-3 contenido_not">
                                ${element.contenido}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>        
                        </div>
                        </div>
                    </div>
                    </div>  
                </div>  
                <hr class="linea linea-noticias">                
                `;
            });
            document.querySelector(".contenido_noticia").innerHTML = $html_noti;
            document.getElementById("num_pag_actual").innerHTML = `PAGINA - ${select_num_pg}`;
        }
    }
    /**.open: especifica la solicitud
     * GET/POST
     * archivo: txt,php,xml,json,etc.
     * true/false: método de envío
     */
    xhr.open('GET','./ajax/consultasDB.php?select_num_pg='+select_num_pg+"&accion=PG_NOTICIA",true);
    /**.send: envia la solicitud al servidor
     * si utilizamos POST debemos pasar los datos por parametros
     */
    xhr.send();

}

//Suma numeros de página de paginacion
function paginacion_siguiente(num_para_sig){
    num_pg1.innerHTML = ++num_para_sig;
    num_pg2.innerHTML = ++num_para_sig;
    num_pg3.innerHTML = ++num_para_sig;
}

//resta numeros de página de paginacion
function paginacion_anterior(num_para_ant){
    num_pg3.innerHTML = --num_para_ant;
    num_pg2.innerHTML = --num_para_ant;
    num_pg1.innerHTML = --num_para_ant;
}