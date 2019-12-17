function borrarPost(id){
  let idPostBorrar = id
  swal("Quieres eliminar tu post?", {
  buttons: ["Cancelar", "Borrar"],
})
  .then((willDelete) => {
    if (willDelete) {
      swal("borrado amigo", {
        icon: "success",
      });
      //return view('borradoDePost')->with('idPostBorrar', idPostBorrar);
    }
  });
}
