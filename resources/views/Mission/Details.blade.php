





<div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-10 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <p class="text-2xl">Nom </p>
          <p class="select-none">{{ $missions->nom }}</p>

          <p class="text-2xl">Prenom</p>
          <p class="select-none">{{$missions->prenom }}</p>

           <p class="text-2xl">Email</p>
          <p class="select-none">{{$missions->email }}</p>

          <p class="text-2xl">Urgence</p>
          <p class="select-none">{{$missions->estUrgent }}</p>

           <p class="text-2xl">Date Dep</p>
          <p>{{ $missions->date_Dep->format('d-m-Y à H:m:s') }}</p>

           <p class="text-2xl">adresse Depart</p>
          <p class="select-none">{{$missions->adresse_Dep }}</p>

          <p class="text-2xl">est Facturé</p>
          <p class="select-none">{{$missions->estFacture }}</p>

           <p class="text-2xl">cond Transp</p>
          <p class="select-none">{{$missions->condTransp }}</p>

          <p class="text-2xl">Date Dep</p>
          <p>{{$missions->created_at->format('d-m-Y à H:m:s') }}</p>
          @if($missions->created_at != $achat->updated_at)
          <p class="text-2xl">Dernière mise à jour</p>
          <p>{{ $missions->updated_at->format('d-m-Y à H:m:s') }}</p>
          @endif
        </div>
      </div>
    </div>
  </div>
