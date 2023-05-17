
function categoryStore() {
    var formData = new FormData(document.getElementById("category"));
    axios({
            method: 'post',
            url: 'categoryStore',
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

function categoryEdit(id) {
    var formData = new FormData(document.getElementById("category"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'categoryEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            category.id.value=response.data["id"];
            category.description.value=response.data["description"];
            category.detail.value=response.data["detail"];

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function categoryUpdate() {
    var formData = new FormData(document.getElementById("category"));
    axios({
            method: 'post',
            url: 'categoryUpdate',
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

function categoryDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("category"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'categoryDestroy',
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

function linkedinCertificationGenerate() {
    // var formData = new FormData(document.getElementById("qualification"));
    // formData.append("id",id);
    // axios({
    //         method: 'post',
    //         url: 'certificationGenerate',
    //         data: formData,
    //         headers: {
    //             'Content-Type': 'multipart/form-data'
    //         }
    //     })
    //     .then(function(response) {
    //         //handle success
    //         //abrin nueva pestaña el cerficado generato







    //     })
    //     .catch(function (response) {

    //         //handle error
    //         console.log(response);
    //     });
    let linkedin = "https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&name=Test%20Certificate&organizationId=1337&issueYear=2018&issueMonth=2&expirationYear=2020&expirationMonth=5&certUrl=https%3A%2F%2Fdocs.microsoft.com%2Fen-us%2Flearn%2Fcertifications%2Fd365-functional-consultant-sales&certId=1234";

    window.open(linkedin, "_blank");

}






function categoryShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'categoryShow',
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
