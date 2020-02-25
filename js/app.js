/**********************************************************************************************************/
//ScrollReveal - Efecto visual que permite aparecer a las elementos de la página 
window.sr=ScrollReveal();
sr.reveal('.navbar',{
    duration:2000,
    origin:'bottom'
});
sr.reveal('.presentacion',{
    duration:2000,
    origin:'bottom',
    distance:'50px',
    delay:1000
});
sr.reveal('.scrol-seccion-forum',{
    duration:2000,
    origin:'top',
    distance:'150px',
    delay:1200
});
sr.reveal('.scrol-clip',{
    duration:4000,
    origin:'bottom',
    distance:'150px',
    delay:1200
});
sr.reveal('.scrol-novedades',{
    duration:1500,
    origin:'top',
    distance:'50px',
    delay:1000
});
sr.reveal('.scrol-redes',{
    duration:2500,
    origin:'bottom',
    distance:'150px',
    delay:2000
});
sr.reveal('.scrol-sec1-left',{
    duration:2500,
    origin:'top',
    distance:'70px',
    delay:2000
});
sr.reveal('.scrol-sec1-right',{
    duration:2500,
    origin:'bottom',
    distance:'70px',
    delay:100
});

sr.reveal('.scrol-sec2-left',{
    duration:2500,
    origin:'top',
    distance:'70px',
    delay:100
});
sr.reveal('.scrol-sec2-right',{
    duration:2500,
    origin:'bottom',
    distance:'70px',
    delay:2000
});

//---------------forum

sr.reveal('.scrol-dias-ponencias',{
    duration:1700,
    origin:'top',
    distance:'400px',
    delay:1000
});

//------organizac
sr.reveal('.scrol-seccion-forum',{
    duration:1200,
    origin:'top',
    distance:'200px',
    delay:1200
});
sr.reveal('.scrol-team',{
    duration:1200,
    origin:'bottom',
    distance:'200px',
    delay:1000
});
//---------certificados
sr.reveal('.scrol-certificado',{
    duration:1500,
    origin:'top',
    distance:'200px',
    delay:1000
});
/**********************************************************************************************************FIN*/



/********************************************************************************************************/
/* smoot scrolling - Efecto visual de transición al momento de cambiar de sección con los menus*/
document.querySelectorAll('a[href^="#"]').forEach(anchor => {                                           /**/
    anchor.addEventListener('click', function (e) {                                                     /**/
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// ----- Solucion Nativa js                                                                             /**/
/*                                                                                                         
let anchorlinks = document.querySelectorAll('a[href^="#"]')                                             
for (let item of anchorlinks) { // relitere 
    item.addEventListener('click', (e)=> {
        let hashval = item.getAttribute('href')
        let target = document.querySelector(hashval)
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
        history.pushState(null, null, hashval)
        e.preventDefault()
    })
};
*/
/********************************************************************************************************FIN*/
