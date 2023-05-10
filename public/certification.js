
function certificationStore() {
    var formData = new FormData(document.getElementById("certification"));
    axios({
            method: 'post',
            url: 'certificationStore',
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

function certificationEdit(id) {
    var formData = new FormData(document.getElementById("certification"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'certificationEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            certification.id.value=          response.data["id"];
            certification.description.value= response.data["description"];
          certification.detail.value=    response.data["detail"];
           certification.schedule.value=    response.data["schedule_id"];
           certification.course.value=    response.data["course_id"];
           certification.fec_start.value=    response.data["fec_start"];
           certification.fec_end.value=    response.data["fec_end"];
           certification.hour_start.value=    response.data["hour_start"];

           certification.teacher.value=    response.data["teacher_m"]+ "-"+ response.data["teacher_t"]+ "-"+response.data["teacher_r"] ;
           certification.assistance.value=    response.data["assistance_id"];


        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function certificationGenerate(id) {
    var formData = new FormData(document.getElementById("qualification"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'certificationGenerate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            //abrin nueva pestaña el cerficado generato
            window.open("certificaciones","_blank")
//////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////////////////////////////////////////////








////////////////////////////
        })
        .catch(function (response) {

            //handle error
            console.log(response);
        });

}



























function qrGenerate(id) {

}
function certificationUpdate() {
    var formData = new FormData(document.getElementById("certification"));
    axios({
            method: 'post',
            url: 'certificationUpdate',
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

function certificationDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("certification"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'certificationDestroy',
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

function certificationShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'certificationShow',
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
