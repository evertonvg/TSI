require('./bootstrap');
require('jquery');
require('./jQuery');
require('axios');
require('slick-carousel');


let login = document.querySelector('.login');
let modal = document.querySelector('.modalll');
let xis =   document.querySelector('.xis');
let form = document.querySelector('.modal-centerr');
let body = document.getElementsByTagName('BODY')[0];


login.addEventListener('click',function(e){
    e.preventDefault();
    modal.style.display = 'flex';
    count = 1;
    interval = setInterval(()=>{
        console.log(modal.style.backgroundColor);
        modal.style.backgroundColor = 'rgba(0,0,0,0.'+count+')';
        if(modal.style.backgroundColor == 'rgba(0, 0, 0, 0.6)'){
            clearInterval(interval);
        }
        count++;
    },100);

});

xis.addEventListener('click',function(){
    modal.style.display = 'none';
    modal.style.backgroundColor == 'rgba(0, 0, 0, 0.0)';
});

modal.addEventListener('click',function(){
    modal.style.display = 'none';
    modal.style.backgroundColor == 'rgba(0, 0, 0, 0.0)';
});

form.addEventListener('click',function(e){
    e.stopPropagation();
});
