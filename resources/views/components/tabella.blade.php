 @props(['train'])

 <div class="riga-treno">

     <!-- 1. Orario -->
     <div class="orario">
         {{ \Carbon\Carbon::parse($train->departure_time)->format('H:i') }}
     </div>

     <!-- 2. Destinazione -->
     <div class="destinazione">
         {{ $train->arrival_station }}
     </div>

     <!-- 3. Info in Verde -->
     <div class="info-verde">
         @if ($train->is_cancelled)
             <span style="color: red;">Cancelled</span>
         @else
             On time ({{ \Carbon\Carbon::parse($train->arrival_time)->format('H:i') }})
         @endif
     </div>

 </div>
