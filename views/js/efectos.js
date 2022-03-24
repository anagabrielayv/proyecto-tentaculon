btnmenutablet = document.getElementById("btn-menu-tablet");
btnmenu = document.getElementById("btn-menu-movil");

if (document.getElementById("menu")) {
    document.getElementById("menu").style.display = 'none';
    
    btnmenu.addEventListener('click', () => {
        if (document.getElementById("menu").style.display == 'none') {
            $(".contenedor-menu").show();
            $(".contenedor").hide();
        } else {
            $(".contenedor-menu").hide();
            $(".contenedor").show();
        }
    })
}

if (document.getElementById("btn-menu-tablet")) {
    document.getElementById("menu-tablet").style.display = 'none';
    
    btnmenutablet.addEventListener('click', () => {
        if (document.getElementById("menu-tablet").style.display == 'none') {
            $(".contenedor-menu-tbl").show();                        
            $(".contenedor-tbl").hide();
        } else {
            $(".contenedor-menu-tbl").hide();
            $(".contenedor-tbl").show();
        }
    })
}


/*SLIDES DE PARTE DE LA CARTA*/ 
const categoryTitle= document.querySelectorAll('.category-title');
const allCategoryPosts = document.querySelectorAll('.all');

for(let i = 0; i< categoryTitle.length; i++){
    categoryTitle[i].addEventListener('click',filterPosts.bind(this, categoryTitle[i]));

}

function filterPosts(item){
    changeActionPosition(item);
    for(let i = 0; i < allCategoryPosts.length; i++){
        if(allCategoryPosts[i].classList.contains
            (item.attributes.id.value)){
                allCategoryPosts[i].style.display="block";
            } else{
                allCategoryPosts[i].style.display="none";
            }
    }
}

function changeActionPosition(activeItem){
    for(let i = 0; i < categoryTitle.length; i++ ){
        categoryTitle[i].classList.remove('active-platos');
    }
    activeItem.classList.add('active-platos');
};