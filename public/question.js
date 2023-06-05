function questionDetail(id) {
  var formData = new FormData(document.getElementById("question"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "question_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "preguntas";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function questionStore() {
    var formData = new FormData(document.getElementById("question"));
    axios({
            method: 'post',
            url: 'questionStore',
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

function questionEdit(id) {
    var formData = new FormData(document.getElementById("question"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'questionEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
          question.id.value = response.data["id"];
               question.ask.value = response.data["ask"];
          question.answer.value = response.data["answer"];
          question.alternative1.value = response.data["alternative1"];
          question.alternative2.value = response.data["alternative2"];
          question.alternative3.value = response.data["alternative3"];
          question.alternative4.value=response.data["alternative4"];
        
          
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function questionUpdate() {
    var formData = new FormData(document.getElementById("question"));
    axios({
            method: 'post',
            url: 'questionUpdate',
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

function questionDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("question"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'questionDestroy',
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

function questionShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'questionShow',
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
