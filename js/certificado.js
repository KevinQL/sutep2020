procesar_certificado();
function procesar_certificado(){
    let el = document.getElementById('btn-obtener');

    if(el){
        el.addEventListener('click',function(event){
            event.preventDefault();
            let dni = document.getElementById('dni-certi').value;
            let anio = document.getElementById('anio-certi').value;

            if( dni.length != 8 || ((dni/dni) != 1) ){
                //FUNCION MENSAJE DE ERROR CUANDO NO ES DNI
                No_es_Dni();

                console.log( $('#formulario').serialize() ); //prueba :)          

                return null;

            }else{

                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        let request_server = JSON.parse(this.responseText)?true:false;        
                        if(request_server){
                            Descargar(dni,anio);
                        }else{
                            //el usuario no existe en la db-tabla dcente o no asistió al evento en algún año en particular                             
                            Usuario_No_Existe(anio);
                        }
                        
                    }
                }

                xhr.open('GET','ajax/consultasDB.php?dni='+dni+'&anio='+anio+'&accion=COMPROBAR_CERTIFICADO',true);

                xhr.send();

            }            
        });
    }
}

/*
* Funciones para las notificaciones de consulta
*/

function Descargar(dni,anio){
    document.querySelector(".notice-general").innerHTML = `
        <div class="alert alert-success alert-dismissible fade show text-center notice" role="alert">
            <span class="notification"> certificado para ${dni} 
            <a href='library_download/certificate.php?chm%&REZUAM=%&odm&%odeel&le=${btoa(dni)}&OTHER=${btoa("hecho por rezuam ** 12354")}&indetnecod=${btoa(dni)}&oina=${btoa(anio)}' target='_blank' class="btn btn-warning btn-lg btn-block">Descargar pdf</a> </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times</span> 
            </button>
        </div>
    `;
}

function Usuario_No_Existe(anio){
    document.querySelector(".notice-general").innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show notice" role="alert">
            <span class="notification lead">NO ASISTIÓ AL VENTO EL AÑO ${anio}</span>
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