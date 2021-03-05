function enviarcorreo(){
    var nombre=$("#name").val();
    var email=$("#email").val();
    var subject=$("#subject").val();
    var message=$("#message").val();
   
    $.ajax({
        type: "POST",
        url: "enviarmail.php",
        data: "email="+email+"&message="+message+"&subject="+subject+"&nombre="+nombre,
success: function(datos){
    
    Swal.fire(
        'sent',
        'your email was sent successfully, we will contact you soon',
        'success'
      )

}
    });
}