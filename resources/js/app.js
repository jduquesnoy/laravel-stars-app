require('./bootstrap');

//ajout des details de la star sur la page index_visitor
if(window.location.pathname ==="/"){
  if (window.screen.width <= 375 && window.screen.height <= 812) {   // ajout à la suite de la carte description dans la liste lorsque que l'ecran est de petite taille
    const stars = document.querySelectorAll('.list-group-item');
    stars.forEach((star) => {
      star.addEventListener('click', (event) => {
        event.preventDefault();
        const active = document.querySelector('.active');
        if(active){active.classList.remove('active')};
        const card = document.querySelector('.card');
        if(card){card.remove()};
        event.currentTarget.classList.add('active');
        event.currentTarget.insertAdjacentHTML("afterend",`
            <div class="card" style="width: auto;">
              <img class="card-img-top" src="${event.currentTarget.dataset.photo}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}</h5>
                  <p class="card-text">${event.currentTarget.dataset.description}</p>
              </div>
            </div>`               
        );
      });
    });
  }else{      // ajout de la carte description de la star sur le coté de la liste lorsque qu'il s'agit d'un ecran de grande taille
    const stars = document.querySelectorAll('.list-group-item');
    stars.forEach((star) => {
      star.addEventListener('click', (event) => {
        event.preventDefault();
        const active = document.querySelector('.active');
        if(active){active.classList.remove('active')};
        const card = document.querySelector('.card-s');
        if(card){card.remove()};
        event.currentTarget.classList.add('active');
        event.currentTarget.parentElement.parentElement.parentElement.insertAdjacentHTML("afterend",`
        <div class="col-12 col-md-6 card-s">
            <article class="card" style="width: auto;max-width:600px;" id="${event.currentTarget.dataset.id}">
              <img class="card-img-top" src="${event.currentTarget.dataset.photo}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}</h5>
                  <p class="card-text">${event.currentTarget.dataset.description}</p>
              </div>
            </article>
        </div>`
          );
        const cardView = document.getElementById('header');
        cardView.scrollIntoView();
      });
    });
  }
// ajout des details de la star sur la page admin avec un bouton d'accès à la show
}else{
  if (window.screen.width <= 375 && window.screen.height <= 812) {    // ajout à la suite de la carte description dans la liste lorsque que l'ecran est de petite taille
    const stars = document.querySelectorAll('.list-group-item');
    stars.forEach((star) => {
      star.addEventListener('click', (event) => {
        event.preventDefault();
        const active = document.querySelector('.active');
        if(active){active.classList.remove('active')};
        const card = document.querySelector('.card');
        if(card){card.remove()};
        event.currentTarget.classList.add('active');
        event.currentTarget.insertAdjacentHTML("afterend",`
            <div class="card" style="width: auto;">
              <img class="card-img-top" src="${event.currentTarget.dataset.photo}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}</h5>
                  <p class="card-text">${event.currentTarget.dataset.description}</p>
                  <a href="/stars/${event.currentTarget.dataset.id}" class="btn btn-primary mr-3">Fiche</a>
              </div>
            </div>`               
        );
      });
    });
  }else{    // ajout de la carte description de la star sur le coté de la liste lorsque qu'il s'agit d'un ecran de grande taille
    const stars = document.querySelectorAll('.list-group-item');
    stars.forEach((star) => {
      star.addEventListener('click', (event) => {
        event.preventDefault();
        const active = document.querySelector('.active');
        if(active){active.classList.remove('active')};
        const card = document.querySelector('.card-s');
        if(card){card.remove()};
        event.currentTarget.classList.add('active');
        event.currentTarget.parentElement.parentElement.parentElement.insertAdjacentHTML("afterend",`
        <div class="col-12 col-md-6 card-s">
            <article class="card" style="width: auto;max-width:600px;" id="${event.currentTarget.dataset.id}">
              <img class="card-img-top" src="${event.currentTarget.dataset.photo}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}</h5>
                  <p class="card-text">${event.currentTarget.dataset.description}</p>
                  <a href="/stars/${event.currentTarget.dataset.id}" class="btn btn-primary mr-3">Fiche</a>
              </div>
            </article>
        </div>`
          );
        const cardView = document.getElementById('header');
        cardView.scrollIntoView();
      });
    });
  }
}


