<div class="fixed left-0 w-full"
     style="
        bottom: 15vh;   
        height: 13.2vh;        
        background: #353535;
        box-shadow: -1px 4px 26px #00000029;
        border: 1px solid #70707061;
        opacity: 1;
        z-index: 50;
     ">
    <div class="container mx-auto px-15 md:px-30  flex flex-col md:flex-row justify-between items-center gap-1/2 py-4">
        <!-- Bloc gauche -->
        <div class="bg-gray-100 rounded-2xl flex items-center gap-4 px-4 py-2">
            <!-- Icone calendrier centré -->
            <div class="flex items-center justify-center p-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="#BF2A6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                    <path d="m9 16 2 2 4-4"/>
                </svg>
            </div>

            <div class="flex flex-col justify-center mr-5">
                <p class="text-[#36578a] font-bold text-lg mb-1">
                    Test psychotechnique le 28 mars à 14:00
                </p>
                <p class="text-[#36578a] text-base md:text-sm">
                    15 rue de la république Montgeron 91230
                </p>
            </div>
        </div>

        <!-- Bloc droit -->
        <div class="flex flex-col text-white w-1/5 gap-3">
            <div class="flex items-center justify-between">
                <p class="text-md">Total</p>
                <p class="text-2xl md:text-3xl font-bold">135€</p>
            </div>
            <a href="/randriambololona-payment"
               class="bg-[#BF2A6B] hover:bg-pink-800 transition rounded-xl flex justify-center items-center text-md gap-2 py-2 text-center">
                <span>Suivant</span>
                <!-- Icone flèche -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
