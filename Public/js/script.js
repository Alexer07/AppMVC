let registrarUsuario = async()=>{
    let url="?controlador=usuario&accion=registrar";
    fd= new FormData();
    fd.append("nombre" , document.getElementById("nombre").value);
    fd.append("apellido" , document.getElementById("apellido").value);
    fd.append("email" , document.getElementById("email").value);
    fd.append("telefono" , document.getElementById("telefono").value);
    fd.append("contraseña" , document.getElementById("contraseña").value);
    fd.append("fechaNaci" , document.getElementById("fechaNaci").value);
    fd.append("Rol" , document.getElementById("Rol").value);
    
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
      setTimeout(() => {
        window.location.href="?controlador=usuario&accion=principal";
      }, 1500);
      
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
     window.location.href="?controlador=programa&accion=principal";
    
      $("#frm")[0].reset();
}
let eliminar = async()=>{
  const bt = document.querySelector(".btn-danger[data-id]");
  const id = bt.getAttribute("data-id");
  const opc = bt.getAttribute("data-name");
  console.log(id);
  console.log(bt);
  console.log(opc);
  Swal.fire({
    title: "¿Estás seguro?",
    text: "No podrás revertir esto.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "¡Eliminado!",
        text: "Tu archivo ha sido eliminado.",
        icon: "success",
        timer: 2000,
      });
      if (opc == "programa") {
        window.location.href = `?controlador=programa&accion=eliminar&id=${id}`;
      }
      if (opc == "usuarios") {
        setTimeout(() => {
          window.location.href = `?controlador=programa&accion=eliminar&id=${id}`;
        }, 1500);
       
      }
    }
  });
};
let EditarUsuario = async () => {
  let formUrl = "?controlador=usuario&accion=editar";
  fd = new FormData();
  fd.append("nombre", document.getElementById("nombre").value);
  fd.append("apellido", document.getElementById("apellido").value);
  fd.append("telefono", document.getElementById("telefono").value);
  fd.append("fechaNaci", document.getElementById("fechaNaci").value);
  fd.append("uid", document.getElementById("uid").value);


  let respuesta = await fetch(formUrl, {
    method: "post",
    body: fd,
  });
  let info = await respuesta.json();
  if (info.estado==1){
    window.location.href='?controlador=usuario&accion=principal';
  }else{
  Swal.fire({
    icon: info.icono,
    title: info.mensaje,
    timer: 2000,
  });
}
}
let EditarPrograma = async () => {
  let formUrl = "?controlador=programa&accion=editar";
  fd = new FormData();
  fd.append("nombre", document.getElementById("nombre").value);
  fd.append("codigo", document.getElementById("codigo").value);
  fd.append("uid", document.getElementById("uid").value);

  let respuesta = await fetch(formUrl, {
    method: "post",
    body: fd,
  });
  let info = await respuesta.json();
  Swal.fire({
    icon: info.icono,
    title: info.mensaje,
    timer: 2000,
  });
  window.location.href='?controlador=programa&accion=principal';

};