<div class="card col-lg-8 my-1">
    <div class="card-body d-flex px-0">
        <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
            <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/10/16/13/44/young-woman-1745173__340.jpg" alt="">
        </div>

        <div class='d-flex align-items-center'>
            <div>
                <p class='fw-bold'>Meetup in Long Beach</p>
                {{-- <x-slot name=":meetup.languageA">
                    <p>Language A: {{:meetup->languageA}}</p>

                </x-slot>
                <p>Language B: {{:meetup->languageB}}</p> --}}
                <p>Capacity: {{$max}}</p>
            </div>
        </div>
    </div>
</div>
