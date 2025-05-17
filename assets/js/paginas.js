document.addEventListener("DOMContentLoaded", function(){
    const params = new URLSearchParams(window.location.search);
    const seccion = params.get('seccion');

    if(seccion === 'nosotros'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    }else if ( seccion  === 'catalogo'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    }else if ( seccion  === 'servicios'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    } else if (seccion === 'proyectos'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    }else if (seccion === 'contacto'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    }else if (seccion === 'carrito'){
        const infoHeader = document.getElementById("infoHeader");
        const header = document.getElementById("header");
        if(infoHeader && header){
            infoHeader.style.display = 'none';
            header.style.backgroundImage = 'none';
            header.style.backgroundColor = 'rgba(2,99,175,255)';
            header.style.height = '8vw';
            if(window.matchMedia("(max-width: 600px)").matches){
                header.style.backgroundColor = 'transparent';
            }
        };
    };


    if( seccion === 'nosotros'){
        const menuCelular = document.getElementById("offcanvasNavbarLabel");
        menuCelular.innerText = 'Nosotros';
    } else if (seccion === 'servicios'){
        const menuCelular = document.getElementById("offcanvasNavbarLabel");
        menuCelular.innerText = 'Servicios';
    } else if (seccion === 'proyectos'){
        const menuCelular = document.getElementById("offcanvasNavbarLabel");
        menuCelular.innerText = 'Proyectos';
    } else if (seccion === 'catalogo'){
        const menuCelular = document.getElementById("offcanvasNavbarLabel");
        menuCelular.innerText = 'Catalogo';
    } else if (seccion === 'carrito'){
        const menuCelular = document.getElementById("offcanvasNavbarLabel");
        menuCelular.innerText = 'Carrito';
    }
});