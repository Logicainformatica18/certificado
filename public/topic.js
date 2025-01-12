
function topic(id) {
  var formData = new FormData(document.getElementById("course"));
  formData.append("id", id);
  axios({
    method: "get",
    url: "cursos_temario",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "cursos_temario";
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
    axios({
            method: 'post',
            url: 'topicStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
  //carga pdf- csv - excel
  datatable_load();
  alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function topicEdit(id) {
    var formData = new FormData(document.getElementById("topic"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'topicEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            topic.id.value=response.data["id"];
            topic.description.value=response.data["description"];
          topic.detail.value = response.data["detail"];
           topic.hours.value=response.data["hours"];
            topic.type.value = response.data["type_id"];
          topic.folder_certification.value = response.data["folder_certification"];
           topic.review.value=    response.data["review"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function topicUpdate() {
    var formData = new FormData(document.getElementById("topic"));
    axios({
            method: 'post',
            url: 'topicUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
              datatable_load();
              alert('Modificado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function topicDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("topic"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'topicDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
              datatable_load();
              alert('Eliminado Correctamente');

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
            method: 'post',
            url: 'topicShow',
            data: formData,
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
