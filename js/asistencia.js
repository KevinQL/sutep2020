traer_datos_docente();

//funcion que trae los datos de los docentes
function traer_datos_docente(){
    let el = document.getElementById("dni-asis");
    if(el){
        let dni;
        el.addEventListener("keyup",function(){

            dni = this.value;

            //cuando el campo dni tenga 8 digitos se hará la busqueda en la db - tabla docente
            if(dni.length === 8){
                

                //------------
                let xhr = new XMLHttpRequest();

                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        let data = JSON.parse(this.responseText);  
                        let cantData = data.length;
                        let existData = (cantData!== 0)?true:false;    
                        if(existData){            
                            //VERIFICA ASISTENCIA REGISTRADA
                            let anio = document.getElementById("anio-asis").value.trim();
                            verificar_asistencia(dni, anio);              
                            //imprime los datos del docente encontrado
                            data.forEach(element => {
                                document.querySelector("#nombres-asis").value = element.nombres;
                                document.querySelector("#apellidos-asis").value = element.apellidos;
                                document.querySelector("#rs-cons-asis").innerHTML = `<span class="text-warning">Docente Encontrado</span>`;
                            });
                            //en caso de que se encuantre más de '1' docente 
                            if(cantData !== 1){
                                document.querySelector("#advertencia-cant-docente").innerHTML = `
                                <span class="text-white bg-danger p-1" >Duplicidad en datos. Encontrados ${cantData} docentes</span>`;                                                            
                            }
                            //deshabilita btn guardar y asistencia
                            document.getElementById("btn-guardar-asis").classList.add('d-none');
                        }else{
                            //en caso de que no se encuntre
                            document.querySelector("#rs-cons-asis").innerHTML = `<span class="text-danger">Docente No Encontrado</span>`;
                        }
                    }
                }

                xhr.open('GET','ajax/consultasDB.php?dni='+dni+"&accion=TRAER_DOCENTES",true);
                xhr.send();

            }else{
                //se limpian los resultados cuando el dni no es correcto
                limpiar_form_asistencia();                
            }
        })
    }    
}

function guardar_y_asistencia(){
    let el = document.getElementById("btn-guardar-asis");
    if(el){
        let anio, dni,nombres,apellidos,celular,observacion,tipo;
        anio = document.getElementById("anio-asis").value.trim();
        dni = document.getElementById("dni-asis").value.trim();
        nombres = document.getElementById("nombres-asis").value.trim();
        apellidos = document.getElementById("apellidos-asis").value.trim();
        celular = document.getElementById("celular-asis").value.trim();
        observacion = document.getElementById("observacion-asis").value.trim();
        tipo = document.getElementById("tipo-asis").value.trim();

        if(dni !== "" && dni.length == 8 && nombres !== "" & apellidos !== ""){
            
            insertar_docente(dni,nombres,apellidos,tipo, observacion,celular);
            let estado = 1;
            asistencia_docente(dni,anio,tipo,estado);

        }else{
            console.log("campos vacios!!")
        }
    }
}

function asistencia(){
    let anio, dni,nombres,apellidos,celular,observacion,tipo;
    anio = document.getElementById("anio-asis").value.trim();
    dni = document.getElementById("dni-asis").value.trim();
    nombres = document.getElementById("nombres-asis").value.trim();
    apellidos = document.getElementById("apellidos-asis").value.trim();
    celular = document.getElementById("celular-asis").value.trim();
    observacion = document.getElementById("observacion-asis").value.trim();
    tipo = document.getElementById("tipo-asis").value.trim();

    if(dni !== "" && dni.length == 8 && nombres !== "" & apellidos !== ""){

        let estado = 1;
        asistencia_docente(dni,anio,tipo,estado);
    }else{
        console.log("campos vacios!!")
    }
}


function insertar_docente(dni,nombres,apellidos,tipo, observacion, celular){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let data = JSON.parse(this.responseText); 
            let valData = data?true:false;
            if(valData){                
                document.getElementById("advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-success p-1" > Se guardó exitosamente </span>`; 
                limpiar_form_asistencia2(); 
            }else{
                document.getElementById("advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-warning p-1" > error al guardar </span>`; 
            }
        }
    }

    xhr.open('GET','ajax/consultasDB.php?dni='+dni+"&nombres="+nombres+"&apellidos="+apellidos+"&celular="+celular+"&observacion="+observacion+"&tipo="+tipo+"&accion=INSERTAR_DOCENTE",true);
    xhr.send();
}


function asistencia_docente(dni,anio,tipo,estado){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let data = JSON.parse(this.responseText); 
            let valData = data?true:false;
            if(valData){                
                document.getElementById("advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-success p-1" > Registro de Asistencia exitosa </span>`; 
                limpiar_form_asistencia2(); 
            }else{
                document.getElementById("advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-warning p-1" > error al guardar </span>`; 
            }
        }
    }

    xhr.open('GET','ajax/consultasDB.php?dni='+dni+"&anio="+anio+"&tipo="+tipo+"&estado="+estado+"&accion=ASISTENCIA_DOCENTE",true);
    xhr.send();
}

function verificar_asistencia(dni,anio){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let data = JSON.parse(this.responseText); 
            let valData = data?true:false;
            if(valData){                
                document.getElementById("advertencia-asistencia").innerHTML = `
                <span class="text-white bg-success p-1" > Asistencia registrada </span>`;
                //des-habilita btn asistencia
                document.getElementById("btn-asistencia-asis").classList.add('d-none');              
            }else{
                document.getElementById("advertencia-asistencia").innerHTML = `
                <span class="text-white bg-warning p-1" > falta registrar asistencia </span>`;
                //habilita btn asistencia
                document.getElementById("btn-asistencia-asis").classList.remove('d-none');
            }
        }
    }

    xhr.open('GET','ajax/consultasDB.php?dni='+dni+"&anio="+anio+"&accion=VERIFICAR_ASISTENCIA",true);
    xhr.send();
}

//****************** */
function limpiar_form_asistencia(){
    document.querySelector("#nombres-asis").value = "";
    document.querySelector("#apellidos-asis").value = "";
    document.querySelector("#rs-cons-asis").innerHTML = `<span class="">Esperando...</span>`;
    document.querySelector("#advertencia-cant-docente").innerHTML = ``;
    document.getElementById("advertencia-asistencia").innerHTML = `
    <span class="p-1" >Esperando...</span>`;  
    //deshabilita btn guardar y asistencia
    document.getElementById("btn-guardar-asis").classList.remove('d-none');
    //habilita btn asistencia
    document.getElementById("btn-asistencia-asis").classList.add('d-none');
}
function limpiar_form_asistencia2(){
    document.querySelector("#dni-asis").value = "";
    document.querySelector("#nombres-asis").value = "";
    document.querySelector("#apellidos-asis").value = "";
    document.querySelector("#rs-cons-asis").innerHTML = `<span class="">Esperando...</span>`;
    document.getElementById("advertencia-asistencia").innerHTML = `
    <span class="p-1" >Esperando...</span>`;  
    //habilita btn asistencia
    document.getElementById("btn-asistencia-asis").classList.add('d-none');
}

