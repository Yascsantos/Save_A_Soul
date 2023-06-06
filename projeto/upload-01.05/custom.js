function upload_file(e){
    e.preventDefault();
    ajax_file_upload(e.dataTransfer.files[0]);

}

function file_explorer(){
    document.getElementById('selectfile').click();

}

document.getElementById('selectfile').oncharge = function(){
    ajax_file_upload(document.getElementById('selectfile').files[0]);

};
function ajax_file_upload(file_obj){
    if (file_obj != undefined){
        var form_data = new FormData ();
        form_data.append('file', file_obj);
        var xhttp =new XMLHttpRequest();
        xhttp.open("POST", "ajax1.php", true);
        xhttp.onload = function(event){
            oOutput = document.querySelector('img-content');
            if (xhttp.status== 200 && this.responseText != "error"){
                oOutput.innerHTML = "<img src='"+ this.responseText +"' alt='Image' />";
            } else {
                oOutput.innerHTML = "Ocorreu um erro ao tentar enviar seu arquivo.";
            }
        }
    
        xhttp.send(form_data);
    }
}