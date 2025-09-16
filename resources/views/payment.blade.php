@extends('layouts.app')

@section('title', 'Confirmation Payment')

@section('content')
    <div class="bg-white mt-0.5 p-4 md:p-0">
        <div class="container mx-auto px-15 md:px-30 md:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-16">
                <div class="lg:col-span-3">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Confirmer et payer</h1>

                    <div class="flex items-center space-x-4 border border-gray-200 rounded-lg p-4 mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                        </svg>
                        <div>
                            <p class="font-semibold text-gray-800">Date de réservation en forte demande</p>
                            <p class="text-sm text-gray-600">Les réservations sont fréquentes pour ce centre</p>
                        </div>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Vos informations personnelles</h2>
                        <div class="space-y-4">
                            <input type="text" placeholder="Nom Prénom"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                            <input type="email" placeholder="Email"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                            <input type="tel" placeholder="Numéro de téléphone"
                                class="w-full p-3 bg-gray-100 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
                        </div>
                    </div>
                    <hr class="border-t border-gray-500 mb-10">

                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-800 mb-5">Votre test psychotechnique</h2>
                        <div class="space-y-5">
                            <div class="flex items-center">
                                <i class="far fa-calendar-alt text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Date</p>
                                    <p class="text-gray-600">12 mai 2025</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="far fa-clock text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Horaire</p>
                                    <p class="text-gray-600">12:30</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-500 text-xl w-6 text-center"></i>
                                <div class="ml-4">
                                    <p class="font-semibold text-gray-800">Adresse</p>
                                    <p class="text-gray-600">39 Rue Emile Steiner, 27200 Vernon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr class="border-t border-gray-500 mb-10">

                <!-- Payment method -->
                <div class="divide-y divide-gray-300">
                    <!-- Carte bancaire -->
                    <label for="cb" class="flex items-center p-4 cursor-pointer hover:bg-gray-50 w-full">
                        <input type="radio" id="cb" name="payment" class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                        <div class="w-12 h-8 ml-4 flex items-center justify-center">
                            <img src="/images/carte-bancaire.png" alt="Carte bancaire" class="max-h-full max-w-full">
                        </div>
                        <span class="ml-3 flex-grow text-lg font-medium text-gray-700 text-left">Carte bancaire</span>
                    </label>

                    <!-- Apple Pay -->
                    <label for="applepay" class="flex items-center p-4 cursor-pointer hover:bg-gray-50 w-full">
                        <input type="radio" id="applepay" name="payment" class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                        <div class="w-12 h-8 ml-4 flex items-center justify-center">
                            <img src="/images/Apple_Pay_logo.png" alt="Apple Pay" class="max-h-full max-w-full">
                        </div>
                        <span class="ml-3 flex-grow text-lg font-medium text-gray-700 text-left">Apple Pay</span>
                    </label>

                    <!-- PayPal -->
                    <label for="paypal" class="flex items-center p-4 cursor-pointer hover:bg-gray-50 w-full">
                        <input type="radio" id="paypal" name="payment" class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                        <div class="w-12 h-8 ml-4 flex items-center justify-center">
                            <img src="/images/PayPal.png" alt="PayPal" class="max-h-full max-w-full">
                        </div>
                        <span class="ml-3 flex-grow text-lg font-medium text-gray-700 text-left">PayPal</span>
                    </label>

                    <!-- Alma -->
                    <label for="alma" class="flex items-center p-4 cursor-pointer hover:bg-gray-50 w-full">
                        <input type="radio" id="alma" name="payment" class="h-4 w-4 text-[#BF2A6B] focus:ring-pink-500">
                        <div class="w-12 h-8 ml-4 flex items-center justify-center">
                            <img src="/images/alma.png" alt="Alma" class="max-h-full max-w-full">
                        </div>
                        <span class="ml-3 flex-grow text-lg font-medium text-gray-700 text-left">Alma</span>
                    </label>
                </div>


                <!-- Bouton Réservation -->
                <div class="mt-8">
                    <a href="/randriambololona-complete-booking"
                    class="w-full flex justify-center items-center bg-[#BF2A6B] hover:bg-pink-700 text-white font-bold py-4 px-4 rounded-md transition duration-300">
                    Je réserve mon test psychotechnique
                    <i class="fas fa-arrow-right ml-3"></i>
                    </a>

                </div>



                </div>

                <div class="lg:col-span-2 sticky top-8">
                    <div class=" p-10 rounded-lg  border border-gray-200 ">

                        <h2 class="text-lg font-bold mb-4 text-[#BF2A6B]">Récapitulatif de votre test psychotechnique</h2>
                        <div class="flex items-center gap-4 mb-4 text-gray-800 flex-row">
                            <p class="text-lg">Total à payer :</p>
                            <p class="font-bold text-xl">130.00€</p>
                        </div>
                        <p class="text-xs text-gray-500 mb-6">
                            En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP.
                            Veuillez consulter notre politique de protection des données.
                        </p>
                    </div>


                    <div class="grid grid-cols-3 gap-4 mt-6 text-center">
                        <div>
                            <div
                                class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0DBC0D" class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                                    <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
                                </svg>
                            </div>
                            <p class="font-semibold text-sm text-gray-800">Entraînement</p>
                            <p class="text-xs text-gray-600">Gratuit Illimité</p>
                        </div>
                        <div>
                            <div
                                class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0dbc0d" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check-icon lucide-file-check"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m9 15 2 2 4-4"/></svg>

                            </div>
                            <p class="font-semibold text-sm text-gray-800">Résultats</p>
                            <p class="text-xs text-gray-600">le Jour Même</p>
                        </div>
                        <div>
                            <div
                                class="mx-auto w-14 h-14 flex items-center justify-center rounded-full border border-[#0DBC0D]  mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0dbc0d" stroke-width="1.7142857142857142" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-icon lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            </div>
                            <p class="font-semibold text-sm text-gray-800">Annulation</p>
                            <p class="text-xs text-gray-600">Gratuite jusqu'à 48h</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection