 @props(['mal'])
 <x-base>
     <div>
         malfunzionamento : {{$mal->mal}}
         soluzione : {{$mal->sol}}
         @can('isTecnicoAzienda')
         <form action="{{route('prodotto.formAggiorna.malsol', $id)}}">
            <button type="submit"></button>
         </form>

         <form action="{{route('prodotto.cancella.malsol', $id)}}">
            <button type="submit"></button>
         </form>
         @endcan
     </div>
 </x-base>