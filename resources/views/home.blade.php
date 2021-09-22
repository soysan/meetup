@php

use App\MyClasses\Data;

@endphp

<x-base>
    <x-slot name="css">
        "css/home.css"
    </x-slot>
    <x-slot name="title">
        home
    </x-slot>
    <div class='container'>
        <p class='pt-4 pb-2'>Group near Los Angeles</p>
        @php $meetups = (Data::getMeetingArr()) @endphp
        @forelse ($meetups as $meetup)
        <x-meetup-card :meetup="$meetup" />
        @empty
        <h1>There is no meetup</h1>
        @endforelse
    </div>

    <div class='container'>
        <p class='pt-4 pb-2'>Members</p>

        <!-- user1 start -->
        <div class="card col-lg-8 my-1">
            <div class="card-body d-flex px-0">
                <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                    <img class="avator" src="https://i.pravatar.cc/150?img=2" alt="">
                </div>

                <div class='d-flex align-items-center'>
                    <div>
                        <p class='fw-bold'>Shannon B.</p>
                        <p>Native language: Japanese</p>
                        <p>Nnown Languages: Chinese</p>
                        <p>Target Languages: English, French </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-base>
