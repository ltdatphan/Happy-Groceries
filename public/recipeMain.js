
const state = {};
//ALL MODEL CLASSES
//SEARCH CLASS
class Search {
    constructor(query) {
        this.query = query;
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


<a href="#${recipe.recipe_id}" class="recipe-card">
<div class="row">
<div class="cart" style="margin: 0">
    <div class="card cart d-flex products-card shadow p-3 mb-5 rounded">
        <div class="row no-gutters">
            <img src="${recipe.image_url}" alt="${recipe.title}" style="width:150px; height: 150px;">
            <div class="card-body cart-body">
                <h5 class="card-title" style="height:auto">${recipe.title}</h5>
                <p class="card-description">${recipe.publisher}</p>
            </div>
        </div>
    </div>
</div>
</div>
</a>

`;
    document.querySelector(".results__list").insertAdjacentHTML('beforeend', markup);
};

const createIngredient= (ingredient) => {
    const markup = `<li>${ingredient}</li>`;
    return markup;
}

const renderInfo = (obj) =>{
    const markup = `
    <ul>
    ${obj.ingredients.map(el => createIngredient(el)).join('')}
    </ul>
    <a href="" class='btn card-btn'>View Directions</a>
    `;

    document.querySelector('.recipe-card').insertAdjacentHTML('afterbegin', markup);

};

const clearResults = () => {
    document.querySelector('.results__list').innerHTML=(' ');
}

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





const controlSearch =  async () => {
    clearResults();
    state.search = new Search(document.getElementById("search__field").value);
    document.getElementById("search__field").value=" ";
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

window.addEventListener('hashchange', controlRecipe);


