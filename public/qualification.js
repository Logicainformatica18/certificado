function qualificationDetail(id) {
  var formData = new FormData(document.getElementById("qualification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "qualification_detail",
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
function qualificationStore(id) {
  
    var formData = new FormData(document.getElementById("qualification"+id));
    axios({
            method: 'post',
            url: 'qualificationStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
          //  contentdiv.innerHTML = response.data;
          
  //carga pdf- csv - excel
 
          
 //         datatable_load();
//  alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function qualificationEdit(id) {
    var formData = new FormData(document.getElementById("qualification"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'qualificationEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            qualification.id.value=response.data["id"];
            qualification.description.value=response.data["description"];
          qualification.detail.value=response.data["detail"];
          
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function qualificationUpdate() {
    var formData = new FormData(document.getElementById("qualification"));
    axios({
            method: 'post',
            url: 'qualificationUpdate',
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

function qualificationDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("qualification"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'qualificationDestroy',
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

function qualificationShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'qualificationShow',
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
