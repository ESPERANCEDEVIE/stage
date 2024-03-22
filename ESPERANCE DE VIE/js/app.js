var menu_toggle = document.querySelector('.menu_toggle');
var menu = document.querySelector('.menu');
var menu_toggle_span = document.querySelector('.menu_toggle span');

menu_toggle.onclick = function(){
    menu_toggle.classList.toggle('active');
    menu_toggle_span.classList.toggle('active');
    menu.classList.toggle('responsive') ;
}






function afficherNumero() {
    var numero = document.getElementById("telephone-numero");
    numero.style.display = "inline";
}

function cacherNumero() {
    var numero = document.getElementById("telephone-numero");
    numero.style.display = "none";
}

function afficherMail() {
    var numero = document.getElementById("adresse-mail");
    numero.style.display = "inline";
}

function cacherMail() {
    var numero = document.getElementById("adresse-mail");
    numero.style.display = "none";
}

var iframe = document.querySelector("iframe");
iframe.style.display = 'none'; // Cacher l'iframe initialement

// Fonction pour afficher l'iframe lorsque la souris est sur l'élément parent
document.querySelector(".point.de.collecte").addEventListener("mouseover", function() {
    iframe.style.display = 'block';
});

// Fonction pour cacher l'iframe lorsque la souris quitte l'élément parent
document.querySelector(".point.de.collecte").addEventListener("mouseout", function() {
    iframe.style.display = 'none';
});


var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Thanks for your submission!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)