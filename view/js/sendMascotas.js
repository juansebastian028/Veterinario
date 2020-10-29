const $form = document.querySelector(".form");
const $cardsContainer = document.querySelector(".container");
const $fragment = document.createDocumentFragment();

//Obtener todas las mascotas
const getAllMascotas = async () => {
  try {
    let res = await fetch("../controller/mascotas/getAllMascotas.php");
    json = await res.json();

    let template = "";
    let $cardContent = "";
    $cardsContainer.innerHTML = "";

    json.forEach((element) => {
      template = `<div class="image-container">
                <img class="card__image" src="../uploads/${element.imagen}" alt="Imagen de la mascota">
            </div>
            <h3 class="card__title">${element.nombreMascota}</h3>
            <ul class="card__list">
                <li class="card__item"> <strong>Raza: </strong> ${element.nombreRaza} </li>
                <li class="card__item"> <strong>Nombre dueñ@: </strong> ${element.nombreDueno} </li>
            </ul>
            <button data-idmascota="${element.id}" class="btn btn--right btn--danger btn-delete">  <i class="fas fa-trash-alt"></i> </button>`;

      $cardContent = document.createElement("div");
      $cardContent.className = "card";
      $cardContent.innerHTML = template;

      $fragment.appendChild($cardContent);
    });

    $cardsContainer.appendChild($fragment);

    if (!res.ok) throw { status: res.status, statusText: res.statusText };
  } catch (error) {
    let message = error.statusText || "Ocurrió un error";
    alertify.error(message);
  }
};

//Insertar Mascota
document.addEventListener("submit", async (e) => {
  if (e.target === $form) {
    e.preventDefault();

    let formData = new FormData($form);

    try {
      let options = {
        method: "POST",
        body: formData,
      };

      let res = await fetch(
        "../controller/mascotas/insertMascotas.php",
        options
      );
      json = await res.json();

      if (json === "Mascota registrada exitosamente") {
        $form.reset();
        alertify.success(json);
        $registerModal.classList.remove("show-modal");
        getAllMascotas();
      } else {
        alertify.error(json);
      }

      if (!res.ok) throw { status: res.status, statusText: res.statusText };
    } catch (error) {
      let message = error.statusText || "Ocurrió un error";
      alertify.error(message);
    }
  }
});

//Eliminar Mascota
document.addEventListener("click", async (e)=> {

  if(e.target.matches(".btn-delete")){

    try {
      let options = {
        method: "DELETE",
        headers: {
          "Content-type": "application/json; charset=utf-8",
        },
      };

      let res = await fetch(
        `../controller/mascotas/deleteMascota.php?idMascota=${e.target.dataset.idmascota}`,
        options
      );
        json = await res.json();
        alertify.success(json);
        getAllMascotas();

        if (!res.ok) throw { status: res.status, statusText: res.statusText };

    } catch (error) {
      let message = error.statusText || "Ocurrió un error";
      alertify.error(message);
    }
  }
});

document.addEventListener("DOMContentLoaded", getAllMascotas);
