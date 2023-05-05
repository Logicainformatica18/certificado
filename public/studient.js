
function studientStore() {
    var formData = new FormData(document.getElementById("studient"));
    axios({
            method: 'post',
            url: 'studientStore',
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

function studientEdit(id) {
    var formData = new FormData(document.getElementById("studient"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'studientEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            studient.id.value=response.data["id"];
            studient.description.value=response.data["description"];
          studient.detail.value=response.data["detail"];
           studient.type.value=    response.data["type_id"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function studientUpdate() {
    var formData = new FormData(document.getElementById("studient"));
    axios({
            method: 'post',
            url: 'studientUpdate',
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

function studientDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("studient"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'studientDestroy',
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

function studientShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'studientShow',
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
