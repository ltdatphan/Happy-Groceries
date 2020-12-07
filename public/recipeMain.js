
const state = {};
//ALL MODEL CLASSES
//SEARCH CLASS
class Search {
    constructor() {
        this.query = "pizza";
    }

   async getResults(){
    try{
       const result = await fetch(`https://forkify-api.herokuapp.com/api/search?q=${this.query}`);
       const data = await result.json();
       console.log(data);
       return data;

    }
   catch(error){
    alert(error);
   }  
}

}

class Recipe {
    constructor(id){
        this.id=id;
}

    async getRecipe(){
        try {
            const result = await fetch (`https://forkify-api.herokuapp.com/api/get?rId=${this.id}`);
            const data = await result.json();
            console.log(data);
            this.title = data.recipe.title;
            this.author = data.recipe.publisher;
            this.img = data.recipe.image_url;
            this.url = data.recipe.source_url;
            this.ingredients = data.recipe.ingredients;
        } catch (error){
            console.log(error);
            alert('Something went wrong :(');
        }

        

    }
    calcTime() {
        // Assuming that we need 15 min for each 3 ingredients
        const numIng = this.ingredients.length;
        const periods = Math.ceil(numIng / 3);
        this.time = periods * 15;
    }

    calcServings() {
        this.servings = 4;
    }
}


//VIEW FUNCTIONS 

const renderRecipe = (recipe) => {
    const markup = `

<li>
    <a class="results__link" href="#${recipe.recipe_id}">
    <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="${recipe.image_url}" alt="${recipe.title}">
                    </div>
            <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">${recipe.title}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">${recipe.publisher}</small></p>
                    </div>
            </div>
    </div>

</li>`;
    document.querySelector(".results__list").insertAdjacentHTML('beforeend', markup);
};

const createIngredient= (ingredient) => {
    const markup = `<p>${ingredient}</p>`;
    return markup;
}

const renderInfo = (obj) =>{
    const markup = `
    <h1 class="recipe-title">${obj.title}</h1>
    <div class=recipe-details>
        <p>5 min</p>
        <span>${obj.servings}</span>
    </div>
    <div>
        <ul class=recipe-ingredients>
        ${obj.ingredients.map(el => createIngredient(el)).join('')}
        </ul>
    </div>

    <div>
        <a>click here for directions</a>
    </div>
    `;

    document.querySelector('.recipe-card').insertAdjacentHTML('afterbegin', markup);

};

const clearInfo = () => {
    document.querySelector('.recipe-card').innerHTML=(' ');
}

const renderResults = (recipes, page = 1, resPerPage = 10) => {
    // render results of currente page
    const start = (page - 1) * resPerPage;
    const end = page * resPerPage;

    recipes.slice(start, end).forEach(renderRecipe);

    // render pagination buttons
   // renderButtons(page, recipes.length, resPerPage);
};

state.search = new Search();

const getInput = () => {
    document.querySelector(".search__field").value;
}

const controlSearch =  async () => {
    const query = getInput();
    console.log(query);
    //if(query){
       // state.search = new Search();

            // 4) Search for recipes
            let recipeList;
     
         await state.search.getResults().then(data => {
                recipeList = data.recipes;
               // console.log(recipeList);
            });
            console.log(recipeList);
            // 5) Render results on UI
          renderResults(recipeList);
       
       
  // }
           

            
            
}

document.querySelector('.search').addEventListener('submit', e => {
    e.preventDefault();
    controlSearch();
});

const controlRecipe = async () => {
    const id = window.location.hash.replace('#', '');
    if (id){
        state.recipe = new Recipe(id);
      await state.recipe.getRecipe();
       state.recipe.calcTime();
        state.recipe.calcServings();
        clearInfo();
        renderInfo(state.recipe);
    }
};

window.addEventListener('hashchange', controlRecipe)


