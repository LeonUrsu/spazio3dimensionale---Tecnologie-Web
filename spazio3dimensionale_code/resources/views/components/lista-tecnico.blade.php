 @props(['rottaVediTecnico', 'rottaFormCreaTecnico' ,'tecnici'])
 <div class="lista">
     <div>
         {{ \Diglactic\Breadcrumbs\Breadcrumbs::render() }}
     </div>
     <form action="{{route($rottaFormCreaTecnico)}}" method="GET"> <button type="submit">Crea Tecnico</button></form>
     @foreach ($tecnici as $tecnico)
     <div class="element element_with_button">
         <div>
             <h6>nome : {{$tecnico->nome}}</h6>
             <h6>cognome : {{$tecnico->cognome}}</h6>
             <p>id tecnico : {{$tecnico->id}}</p>
         </div>
         <div>
             <form action="{{route($rottaVediTecnico, $tecnico->id)}}" method="GET">
                 <button type="submit">Vedi</button>
             </form>
         </div>
     </div>
     @endforeach
     <div class="d-flex justify-content-center mt-4">
         {{ $tecnici->links() }}
     </div>
 </div>