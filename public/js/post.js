function borrarPost(id){
  let idPostBorrar = id
  swal("Quieres eliminar tu post?", {
  buttons: ["Cancelar", "Borrar"],
})
  .then((willDelete) => {
    if (willDelete) {
      console.log(idPostBorrar)
      swal("borrado amigo", {
        icon: "success",
      });
    }
  });
}
