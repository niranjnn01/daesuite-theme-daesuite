
    <!-- Header -->
    <header class="header pb-5 mb-4  bg-background" x-data="{ mobileMenuOpen: false, contactModalOpen: false , admissionModalOpen: false}">

            <div class="relative">

                <div class="absolute w-full top-0 left-0 z-50">

                    <div class="container mx-auto max-w-6xl px-4">
                        <div class="flex justify-between items-center">
                        
                            <!-- branding -->
                            <x-theme::branding/>
                        
                            <!-- Desktop Menu -->
                            <x-theme::navigation.menu-bar/>

                        </div>
                    </div>
                </div>
                
            </div>

            

            <x-heros.full-width-with-stats class="pt-25" 
                :background="tenant_asset('images/home-pg-hero-bg.jpg')"
                :stats="$homepgStats->items"
                >

                <x-slot:title1>
                    <h1 class="text-6xl text-accent bold">Daesuite</h1>
                </x-slot:title1>
                <x-slot:title2>
                    <h1 class="text-4xl text-primary bold">Enterprise ERP</h1>
                </x-slot:title2>
                
                

                <x-slot:description>
                    Self-hosted, perpetual-license ERP: Total control of your processes and data.
                </x-slot:description>

                <x-slot:actions>
                    <x-button variant="primary" size="xl">Book Demo</x-button>
                    <x-button variant="secondary" size="xl">Learn More</x-button>
                </x-slot:actions>


            </x-heros.full-width-with-stats>
            
            
            <!-- Explicitly clear the block flow below -->
            <div class="block relative clear-both bg-white w-full">
                <!-- Main page content safely pushed below the fold -->
            </div>

            <!-- Mobile Menu -->
            <x-theme::navigation.mobile/>

            <!-- Modals -->
            <x-system::modals.contact/>
            <x-system::modals.admission-enquiry/>

        

    </header>