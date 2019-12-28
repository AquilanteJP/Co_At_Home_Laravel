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
         //eliminar(datos, evento)
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

 function darMg(id) {
   let idPost = id
   fetch('http://localhost:8000/darMg/'+idPost)
   .then(function(respuesta){
     return respuesta.json();
   })
   .then(function(datos){
     eliminar(datos, evento)
    //console.log(datos)
   })

 }
 var div = d3.select("body").append("div")
     .attr("class", "tooltip-donut")
     .style("opacity", 0);
     var path = svg.selectAll('small')
          .data(pie(totals))
          .enter()
          .append('path')
          .attr('d', arc)
          .attr('fill', function (d, i) {
               return color(d.data.title);
          })
          .attr('transform', 'translate(0, 0)')
          .on('mouseover', function (d, i) {
               d3.select(this).transition()
                    .duration('50')
                    .attr('opacity', '.85');
               //Makes the new div appear on hover:
               div.transition()
                    .duration(50)
                    .style("opacity", 1);
          })
          .on('mouseout', function (d, i) {
               d3.select(this).transition()
                    .duration('50')
                    .attr('opacity', '1');
               //Makes the new div disappear:
               div.transition()
                    .duration('50')
                    .style("opacity", 0);
          });
