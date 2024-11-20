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
      window.location.href = "estudiante-certificados";
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

  // Obtener el elemento <select>
  let category = document.getElementById("category");
  // Obtener los valores seleccionados
  let categorys = [];
  for (let option of category.options) {
    if (option.selected) {
      categorys.push(option.value);
    }
  }



  axios({
    method: "post",
    url: "topicStore",
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
      alert("Registrado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
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
