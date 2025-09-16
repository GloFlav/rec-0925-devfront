@extends('layouts.app')

@section('title', 'Complete booking')

@section('content')

    <!-- MAIN -->
    <div class="container mx-auto mb-32 md:mb-40 px-15 md:px-30 ">
        <p class="text-xl font-bold text-gray-800 leading-tight py-10">
            Complétez votre réservation
        </p>

        <!-- Cards -->
        <div class="flex flex-col md:flex-row gap-8 md:gap-[73px]">
            <!-- CARD 1 : Free -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden">
                <div class="flex flex-col items-center justify-center bg-gray-100 py-3">
                    <p class="text-lg font-bold text-gray-800">Basic</p>
                    <p class="text-sm text-gray-600 mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- prices -->
                    <div class="flex flex-col items-center text-center py-10 p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-4xl">+ 0€
                        </p>

                        <p class="text-xs py-1.5">
                            </br>
                        <p>
                        <button
                            class="bg-[#F2F3F5] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                            <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                            <p class="text-sm text-[#353535] font-bold ">Sélectionner</p>
                        </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-3 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-gray-800 text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#353535" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#353535" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="text-gray-800 text-md">
                                Lorem Ispum
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#353535" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="text-gray-800 text-md">
                                Lorem Ispum
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#353535" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="text-gray-800 text-md">
                                Lorem Ipsum
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <br/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 : main -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden border-[#0DBC0D] border-2">
                <div class="flex flex-col items-center justify-center bg-[#0DBC0D] py-3">
                    <p class="text-lg font-bold text-white">Assurance</p>
                    <p class="text-sm text-white mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- prices -->
                    <div class="flex flex-col items-center text-center py-10 p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-4xl">+ 40 €
                        </p>
                        <p class="text-xs py-1.5">
                            A peine le prices d'un resto
                        <p>
                            <button
                                class="bg-[#0DBC0D] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                                <div class="h-[15px] w-[15px] bg-white rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8" fill="#ffffff" stroke="#e5e5e5" stroke-width="0.5" />
                                        <!-- Symbole check en #0dbc0d -->
                                        <path d="M12.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 1 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                                                fill="#0dbc0d"/>
                                    </svg>


                                </div>
                                <p class="text-sm text-white font-bold ">Sélectionner</p>
                            </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-3 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-[#0DBC0D] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0dbc0d" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>

                        </div>
                        <div class="flex items-center gap-2">
                            <i class="far fa-file-alt text-[#0DBC0D] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Lorem Ispum
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 (bleu) -->
            <div class="w-full md:w-[500px] bg-white rounded-[37px] shadow-md overflow-hidden border-[#36578A] border-2">
                <div class="flex flex-col items-center justify-center bg-[#36578A] py-3">
                    <p class="text-lg font-bold text-white">Complet</p>
                    <p class="text-sm text-white mt-2">
                        Votre test psychotechnique simple
                    </p>
                </div>

                <div class="bg-white">
                    <!-- prices -->
                    <div class="flex flex-col items-center text-center py-10 p-6 border-b border-gray-200">
                        <p class="text-4xl font-bold flex items-center">
                            <span class="text-4xl">+ 60€
                        </p>
                        <p class="text-xs py-1.5">
                            A peine le prices d'un resto
                        <p>
                            <button
                                class="bg-[#36578A] shadow-md mt-3 px-6 py-3 rounded-xl flex items-center gap-2 cursor-pointer transition">
                                <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                                <p class="text-sm text-white font-bold ">Sélectionner</p>
                            </button>
                    </div>

                    <!-- Features -->
                    <div class="flex flex-col gap-4 max-w-xs mx-auto py-3 px-5">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-hand-pointer text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Entraînement illimité et gratuit
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Annulation jusqu'à 48 heures
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="far fa-file-alt text-[#36578A] text-md"></i>
                            <p class="text-gray-800 text-md">
                                Lorem Ispum
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('components.booking-summary')

@endsection