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
                            console.log(data)          
                            //VERIFICA ASISTENCIA REGISTRADA
                            let anio = document.getElementById("anio-asis").value.trim();
                            verificar_asistencia(dni, anio);              
                            //imprime los datos del docente encontrado
                            data.forEach(element => {
                                document.querySelector("#nombres-asis").value = element.nombres;
                                document.querySelector("#apellidos-asis").value = element.apellidos;
                                document.querySelector("#id-asis").value = element.id;
                                document.querySelector("#celular-asis").value = element.celular;
                                document.querySelector("#observacion-asis").value = element.observacion;

                                document.querySelector("#tipo-asis").value = element.tipo;
                                
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
            alert("DATOS INCORRECTOS!!! :/")
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
    //limpiar id_doc:
    document.getElementById("id-asis").value = "";
    //limpiar otros datos
    document.getElementById("celular-asis").value = "";
    document.getElementById("observacion-asis").value = "";

    //coincidencias num
    document.querySelector("#coinci-asis-num").innerHTML = "...";
    document.getElementById("reslist-doce-asis").innerHTML = "";
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
    //limpiar id_doc:
    document.getElementById("id-asis").value = "";
    //limpiar otros datos
    document.getElementById("celular-asis").value = "";
    document.getElementById("observacion-asis").value = "";

    //coincidencias num
    document.querySelector("#coinci-asis-num").innerHTML = "...";
    document.getElementById("reslist-doce-asis").innerHTML = "";
}

/************************************** */

actualizar_datos_asis();
//btn actualizar datos
function actualizar_datos_asis(){
    let el = document.getElementById("btn-actualizar-asis");
    if(el){
        el.addEventListener('click',function(){
        
            let id_docente,dni,nombres,apellidos,celular,observacion,tipo;
            id_docente = document.getElementById("id-asis").value.trim();
            dni = document.getElementById("dni-asis").value.trim();
            nombres = document.getElementById("nombres-asis").value.trim();
            apellidos = document.getElementById("apellidos-asis").value.trim();
            celular = document.getElementById("celular-asis").value.trim();
            observacion = document.getElementById("observacion-asis").value.trim();
            tipo = document.getElementById("tipo-asis").value.trim();
    
            if(dni !== "" && dni.length == 8 && nombres !== "" & apellidos !== ""){
                console.log(id_docente)
                actualizar_docente(id_docente,dni,nombres,apellidos,tipo, observacion,celular);
    
            }else{
                console.log("campos vacios!!")
            }


        })
    }
}
//--
function actualizar_docente(id_docente,dni,nombres,apellidos,tipo, observacion,celular){
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let data = JSON.parse(this.responseText); 
            let valData = data?true:false;
            if(valData){                
                document.querySelector("#advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-success p-1" >Docente actualizado</span>`;
            }else{
                document.querySelector("#advertencia-cant-docente").innerHTML = `
                <span class="text-white bg-danger p-1" >Error en actualizacion</span>`;
            }
        }
    }

    xhr.open('GET','ajax/consultasDB.php?dni='+dni+"&id_docente="+id_docente+"&nombres="+nombres+"&apellidos="+apellidos+"&tipo="+tipo+"&observacion="+observacion+"&celular="+celular+"&accion=ACTUALIZAR_DOCENTE",true);
    xhr.send();
}


//----buscar docentes 
buscar_docente_nomyapell();

function buscar_docente_nomyapell(){

    let el = document.getElementById("reslist-doce-asis");
    if(el){

        let bsc_txt_nom = document.querySelector(".nombres-bsc-asis");
        let bsc_txt_ape = document.querySelector(".apellidos-bsc-asis");
        let txt_nom,txt_ape;
        //dni txt
        let bsc_txt_dni = document.querySelector("#dni-asis");

        bsc_txt_nom.addEventListener("keyup",function(){
            txt_nom = this.value.trim();
            txt_ape = bsc_txt_ape.value.trim();
            if(txt_ape !== "" || txt_nom !== ""){
                traedocent_por_nomyapell(txt_nom,txt_ape);
            }else{
                //coincidencias num
                document.querySelector("#coinci-asis-num").innerHTML = "0";
                document.getElementById("reslist-doce-asis").innerHTML = "";
            }
        })

        bsc_txt_ape.addEventListener("keyup",function(){
            txt_nom = bsc_txt_nom.value.trim();
            txt_ape = this.value.trim();
            if(txt_ape !== "" || txt_nom !== ""){
                traedocent_por_nomyapell(txt_nom,txt_ape);
            }else{
                //coincidencias num
                document.querySelector("#coinci-asis-num").innerHTML = "0";
                document.getElementById("reslist-doce-asis").innerHTML = "";
            }
        })
        
        //---- cuando digite dni
        bsc_txt_dni.addEventListener("blur",function(){
            txt_ape = bsc_txt_ape.value.trim();
            txt_nom = bsc_txt_nom.value.trim();
            if(txt_ape !== "" || txt_nom !== "" && this.value.length === 8){
                traedocent_por_nomyapell(txt_nom,txt_ape);
            }else{
                //coincidencias num
                document.querySelector("#coinci-asis-num").innerHTML = "...";
                document.getElementById("reslist-doce-asis").innerHTML = "";
            }
        })
    }
}
function traedocent_por_nomyapell(nombres,apellidos){
    console.log("->",nombres, apellidos);

    if(nombres.trim() !== "" || apellidos.trim() !== ""){
        
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let data = JSON.parse(this.responseText); 
                let reslistHtml = ``,cont_num=0;
                data.forEach(element => {
                    reslistHtml += `
                    <tr>
                        <th scope="row">${++cont_num}</th>
                        <td>${element.nombres}</td>
                        <td>${element.apellidos}</td>
                        <td>${element.dni}</td>
                        <td>${element.tipo}</td>
                        <td>
                            <button class="btn btn-sm btn-warning disabled">
                                ELEGIR
                            </button>
                        </td>
                    </tr>        
                    `;
                });
                //imprimir los datos en la tabla
                let el = document.getElementById("reslist-doce-asis");
                el.innerHTML=reslistHtml;
                //coincidencias num
                document.querySelector("#coinci-asis-num").innerHTML = cont_num;

            }
        }
    
        xhr.open('GET','ajax/consultasDB.php?nombres='+nombres+"&apellidos="+apellidos+"&accion=TRAERDOCENTE_LIST_ASIS",true);
        xhr.send();

    }else{
        //no hace nada...

    }
}
