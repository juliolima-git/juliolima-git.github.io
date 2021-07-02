const init = () => {
    //Assigning dark theme
    const themeIcon = document.querySelector(".js-theme-icon");
    themeIcon.addEventListener("click", 
        () => 
        { 
            const body = document.getRootNode().body;
            
            if(body.getAttribute("data-theme") === "dark"){
                document.getRootNode().body.setAttribute("data-theme", "default");
                themeIcon.setAttribute("src", "./assets/images/sunny-outline.svg");
            }else {
                document.getRootNode().body.setAttribute("data-theme", "dark");
                themeIcon.setAttribute("src", "./assets/images/moon-outline.svg");
            }
            
        }
    );
    
    //Favorite Icon Animation 
    const favoriteButtons = document.querySelectorAll(".article__favorite-button");
    
    for(let button of favoriteButtons)
        button.addEventListener("click", () => {
            button.classList.toggle("article__favorite-button--filled");
        }
    )
    
    //Search field
    const search = document.querySelector(".search");

    search.addEventListener("keyup", () => {
        const searchValue = search.value;
        const articleTitles = document.querySelectorAll(".text__title");

        for(let title of articleTitles){
            if(title.textContent.toUpperCase().indexOf(searchValue.toUpperCase()) < 0 ){
                title.parentElement.parentElement.style.display = "none";
            }else {
                title.parentElement.parentElement.style.display = "block";
                //I needed to set the opacity if I wanted to search articles hidden by scrollReveal
                title.parentElement.parentElement.style.opacity = "1";
            }
        }

    })

    //Scrolling Itens Animation
    ScrollReveal().reveal('.article', { delay: 150, viewFactor: 0.7 });
    
} 

window.onload = init;