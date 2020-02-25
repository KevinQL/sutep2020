procesar_certificado();
function procesar_certificado(){
    let el = document.getElementById('btn-obtener');

    if(el){
        el.addEventListener('click',function(event){
            console.log("certi click");
            event.preventDefault();
            var dni = document.getElementById('dni').value;

            if( dni.length != 8 || ((dni/dni) != 1) ){
                console.log("Número de DNI incorrecto!!");
                No_es_Dni();

                console.log( $('#formulario').serialize() ); //prueba :)          

                return null;

            }else{

                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        let data = this.responseText?true:false;        
                        console.log(data);
                        let request_server=data;
                        if(request_server){
                            Descargar(dni);
                        }else{
                            console.log("USUARIO NO EXISTE")                                    
                            Usuario_No_Existe();
                        }
                        
                    }
                }

                xhr.open('GET','procesar_certificado.php?dni='+dni,true);

                xhr.send();
                /*
                $.ajax({
                    type: "POST",
                    url: "procesar_certificado.php",
                    data: $('#formulario').serialize(),
                    success: function(data){
                        console.log(data);
                        let request_server=data;
                        if(request_server){
                            Descargar();
                        }else{
                            console.log("USUARIO NO EXISTE")                                    
                            Usuario_No_Existe();
                        }

                    }

                });
                */

            }            
        });
    }
}

/*
* Funciones para las notificaciones de consulta
*/

function Descargar(dni){
    document.querySelector(".notice-general").innerHTML = `
        <div class="alert alert-success alert-dismissible fade show text-center notice" role="alert">
            <span class="notification"> certificado para ${dni} 
            <a href='library_download/certificate.php?chmodmodeelle=%&${btoa(dni)}&${btoa("Lenyn putito siempre putito")}&id=${btoa(dni)}' target='_blank' class="btn btn-warning btn-lg btn-block">Descargar pdf</a> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span> 
            </button>
        </div>
    `;
}

function Usuario_No_Existe(){
    document.querySelector(".notice-general").innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show notice" role="alert">
            <span class="notification lead">No existe!!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span> 
            </button>
        </div>
    `;

}

function No_es_Dni(){
    document.querySelector(".notice-general").innerHTML = `
        <div class="alert alert-warning alert-dismissible fade show notice" role="alert">
            <span class="notification">Numero de DNI incorrecto!!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span> 
            </button>
        </div>
    `;

}