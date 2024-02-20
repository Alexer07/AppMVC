let registrarUsuario = async()=>{
    let url="?controlador=usuario&accion=registrar";
    fd= new FormData();
    fd.append("nombre" , document.getElementById("nombre").value);
    fd.append("apellido" , document.getElementById("apellido").value);
    fd.append("email" , document.getElementById("email").value);
    fd.append("telefono" , document.getElementById("telefono").value);
    fd.append("contraseña" , document.getElementById("contraseña").value);
    fd.append("fechaNaci" , document.getElementById("fechaNaci").value);
    
    let respuesta = await fetch(url,{
        method:"post",
        body : fd
    });
    let info =await respuesta.json();
    Swal.fire({
        position: "top-end",
        icon: info.icono,
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      $("#frm")[0].reset();
}

let validarUsuario = async()=>{

  let url = "?controlador=inicio&accion=validarUsuario";
  let email = document.getElementById("email").value;
  let contraseña = document.getElementById("contraseña").value;

  if(email.trim()!="" || contraseña.trim()!= ""){
    let datos = new FormData();
    datos.append("email",email);
    datos.append("contraseña",contraseña);
    let respuesta = await fetch (url,{
      method:"post",
      body:datos
    });
    let info = await respuesta.json();
    if (info.estado==1){
      window.location.href='?controlador=usuario&accion=principal';
    }else{
      Swal.fire({icon:"error", tittle:info.mensaje});
    }
  }
}

let registrarPrograma = async()=>{
    let url="?controlador=programa&accion=registrar";
    fd= new FormData();
    fd.append("nombre" , document.getElementById("nombre").value);
    fd.append("codigo" , document.getElementById("codigo").value);
    
    
    let respuesta = await fetch(url,{
        method:"post",
        body : fd
    });
    let info =await respuesta.json();
    Swal.fire({
        position: "top-end",
        icon: info.icono,
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      $("#frm")[0].reset();
}
let eliminar = async()=>{
    let url="?controlador=usuario&accion=eliminar&uid=$uid";
    

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-success",
          cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
          });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "Your imaginary file is safe :)",
            icon: "error"
          });
        }
      });
}