function borrarPost(id){
   let idPostBorrar = id
   swal("Quieres eliminar tu post?", {
   buttons: ["Cancelar", "Borrar"],
 })
  .then((willDelete) => {
    if (willDelete) {

       fetch('http://localhost:8000/borradoDePost/'+idPostBorrar)
       .then(function(respuesta){
         return respuesta.json();
       })
       .then(function(datos){
         eliminar(datos, evento)
        //console.log(datos)
       })
       //window.location.href='/borradoDePost/'+idPostBorrar
       swal("Post borrado exitosamente", {
        icon: "success",
       });
       var post = document.getElementById(id)
       post.parentNode.removeChild(post)
       //post.nextElementSibling.remove()
       //console.log(post)
      //return view('borradoDePost')->with('idPostBorrar', idPostBorrar);
    }
  });

}

 function darMg(id, likes) {
   let idPost = id
   let losMg = likes
   fetch('http://localhost:8000/darMg/'+idPost+'/'+likes)
   .then(function(respuesta){
     return respuesta.json();
   })
   .then(function(datos){
     eliminar(datos, evento)
    //console.log(datos)
   })
   
 }
