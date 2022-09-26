function triggerClick(){
    document.querySelector('#ProfileImage').click();
}


function displayImage(e){
  
    if(e.files[0]){
var reader = new FileReader();

reader.onload = function(e){
    document.querySelector('#addPetCirc3').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
}


