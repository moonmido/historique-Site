function exitnav (){
const tab = document.querySelector('.exitnav');
const div = document.querySelector('.phone-nav-all');


tab.addEventListener('click',()=>{
div.classList.remove('enternav');
})


};

function enternav(){
    const btn = document.querySelector('.btn');
    const div = document.querySelector('.phone-nav-all');

btn.addEventListener('click',()=>{
div.classList.add('enternav') ;
})


}
function scrol(){
    const bod = document.querySelector('body');
    const img = document.querySelector('.img-cat');
    const coun = document.querySelector('.main-cat');
    const btns = document.querySelector('.app-info');
    window.onscroll = () => {
        /*1740*/
    if(window.document.documentElement.scrollTop>1790){
        img.style.right = '-10%';
        coun.style.marginLeft = '0%';
    }
    if(window.document.documentElement.scrollTop >2550){
        btns.style.marginLeft = '0%';
   }

    }
    
}




