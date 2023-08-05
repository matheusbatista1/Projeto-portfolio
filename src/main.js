import './assets/css/style.css';

// js puro

// const btnMenu = document.querySelector('.menu-principal__btn');
// const menuPrincipal = document.querySelector('.menu-principal');

// btnMenu.addEventListener("click", abreFechaMenu);

// function abreFechaMenu(ev){ 
//     menuPrincipal.classList.toggle('menu-principal--fechado');
// }

// jquery
$(document).ready(function(){
    // Botão do menu
    $('.menu-principal__btn').click(function() {
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });

    // Slide depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true,
    });

    // jquery validate forms contato
    $('.formulario').validate({
        rules:{
            txtname:'required',
            email:{
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages: {
            txtname: "Por favor preencha o campo Nome.",
            email: {
                required: 'Por favor preencha o e-mail.',
                email: 'Por favor preencha um e-mail válido.'
            },
            mensagem: 'Por favor preencha o campo Mensagem.'
        }
    });
});