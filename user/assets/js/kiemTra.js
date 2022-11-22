function kiemTraDuLieu(){
    var check = document.getElementsByClassName('kiemtra');
    for(var i = 0 ; i<check.length;i++){
        if(check.item(i).value = ""){
            alert(check.item(i).getAttribute('Không được để trống'));
            check.item(i).focus;
            return false;
        }
    }
    return true;
}