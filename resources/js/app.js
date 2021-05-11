require('./bootstrap');



if (window.screen.width <= 375 && window.screen.height <= 812) {
  console.log("Screen less than 500px")
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
}else{
  const stars = document.querySelectorAll('.list-group-item');
  stars.forEach((star) => {
    star.addEventListener('click', (event) => {
      event.preventDefault();
      console.log(event.currentTarget.parentElement.parentElement);
      const active = document.querySelector('.active');
      if(active){active.classList.remove('active')};
      const card = document.querySelector('.card-s');
      if(card){card.remove()};
      event.currentTarget.classList.add('active');
      event.currentTarget.parentElement.parentElement.parentElement.insertAdjacentHTML("afterend",`
      <div class="col-12 col-sm-8 card-s">
          <div class="card" style="width: auto;max-width:600px;" id="${event.currentTarget.dataset.id}">
            <img class="card-img-top" src="${event.currentTarget.dataset.photo}" alt="${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">${event.currentTarget.dataset.firstname} ${event.currentTarget.dataset.lastname}</h5>
                <p class="card-text">${event.currentTarget.dataset.description}</p>
            </div>
          </div>
      </div>`
        );
      const cardView = document.getElementById(event.currentTarget.dataset.id);
      cardView.scrollIntoView();
    });
  });
}
