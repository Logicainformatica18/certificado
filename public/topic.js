function topicDetail(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "certificados_mantenimiento";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDetailStudent(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "Socio Comercial-certificados";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function topicStore() {
  var formData = new FormData(document.getElementById("topic"));

  // Mostrar la barra de progreso y el mensaje de "Cargando..."
  document.getElementById("progress-container").style.display = 'block'; // Asegura que la barra y el mensaje estén visibles
  document.getElementById("progress-message").innerText = "Cargando...";

  axios({
    method: "post",
    url: "topicStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    },
    onUploadProgress: function(progressEvent) {
      if (progressEvent.lengthComputable) {
        // Calculamos el porcentaje de progreso
        var percent = Math.round((progressEvent.loaded * 100) / progressEvent.total);
        
        // Actualizamos la barra de progreso
        document.getElementById("progress-bar").style.width = percent + "%";
      }
    }
  })
    .then(function(response) {
      // Al finalizar la carga, actualizamos el mensaje
      document.getElementById("progress-message").innerText = "Completado";
      document.getElementById("progress-bar").style.width = '100%';  // Aseguramos que la barra se llene completamente

      // Handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      // Carga PDF, CSV, Excel, etc.
      datatable_load();
      alert("Registrado Correctamente");

      // Ocultamos la barra de progreso después de la carga
      setTimeout(function() {
        document.getElementById("progress-container").style.display = 'none';
      }, 1000); // Ocultar la barra después de 1 segundo para mostrar el "Completado"
    })
    .catch(function(error) {
      // En caso de error
      alert('Error al registrar, asegúrece de que los archivos no excedan 10mb')
      //console.log(error);
      document.getElementById("progress-message").innerText = "Error al cargar";
    });
}


function topicEdit(id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "topicEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      topic.id.value = response.data["id"];
      topic.description.value = response.data["description"];
      topic.detail.value = response.data["detail"];
      topic.detail.value = response.data["instruction"];

      // JavaScript para establecer el contenido del textarea
      document.getElementsByClassName("note-editable")[0].innerHTML = response.data["post"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicUpdate() {
  var formData = new FormData(document.getElementById("topic"));
  axios({
    method: "post",
    url: "topicUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
      alert("Modificado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("topic"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "topicDestroy",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
        //carga pdf- csv - excel
        datatable_load();
        alert("Eliminado Correctamente");
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }
}

function topicShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "topicShow",
    data: formData
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
