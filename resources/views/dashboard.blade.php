<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Matrimonial
        </h2>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
                <div class="w3-third w3-margin-bottom">
                    <div class="w3-card-4">
                      <img src="/w3images/team1.jpg" alt="Users" style="width:100%">
                      <div class="w3-container">
                        <h3>Users</h3>
                        <p class="w3-opacity">Total users</p>
                        <p>View joined users</p>
                        <p><a href="/view-users" class="w3-button w3-light-grey w3-block">View</a></p>
                      </div>
                    </div>
                  </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
