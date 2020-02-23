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
