const btn_menu = document.querySelector('.btn_menu');
const header_right = document.querySelector('.header_right');
const btn_close_filter = document.querySelector('.btn_close_filter');
const open_filter = document.querySelector('.open_filter');
const over_filter = document.querySelector('.over_filter');
const close_form_apply = document.querySelector('.close_form_apply');
const over_form_apply = document.querySelector('.over_form_apply');
const cancel_send_apply = document.querySelector('.cancel_send_apply');

let url = "";

btn_menu.addEventListener('click', () => {

    header_right.classList.toggle('open_menu_mobile');

});

if(open_filter){

    open_filter.addEventListener('click', () => {
    
        document.querySelector('.filters').classList.add('open_filters');
        document.querySelector('.over_filter').classList.add('open_over_filter');
    
    });

}

if(btn_close_filter){

    btn_close_filter.addEventListener('click', () => {
    
        document.querySelector('.filters').classList.remove('open_filters');
        document.querySelector('.over_filter').classList.remove('open_over_filter');
    
    });

}

if(over_filter){

    over_filter.addEventListener('click', () => {
    
        document.querySelector('.filters').classList.remove('open_filters');
        document.querySelector('.over_filter').classList.remove('open_over_filter');
    
    });

}

function openForm(){

    document.querySelector('.over_form_apply').classList.add('open_over_form_apply');

}

if(close_form_apply){
    close_form_apply.addEventListener('click', function(){
        document.querySelector('.over_form_apply').classList.remove('open_over_form_apply');
    });    

}
if(cancel_send_apply){
    cancel_send_apply.addEventListener('click', function(){
        document.querySelector('.over_form_apply').classList.remove('open_over_form_apply');
    });    

}
if(over_form_apply){
    
    over_form_apply.addEventListener('click', (e) => {
    
        if (e.target.nodeType == 1 && e.target.classList.contains('over_form_apply')){
            
            document.querySelector('.over_form_apply').classList.remove('open_over_form_apply');
    
        }
    
    });

}