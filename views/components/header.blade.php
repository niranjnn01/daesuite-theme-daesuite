
    <!-- Header -->
    <header class="header pb-5 mb-4  bg-background" x-data="{ mobileMenuOpen: false, contactModalOpen: false , admissionModalOpen: false}">


            <div>
                
            </div>
            <x-heros.full-width-with-stats :background="tenant_asset('images/home-pg-hero-bg.jpg')">


                <div class="container mx-auto max-w-6xl px-4 sticky top-0 z-50">
                    <div class="flex justify-between items-center">
                    
                        <!-- branding -->
                        <x-theme::branding/>
                    
                        <!-- Desktop Menu -->
                        <x-theme::navigation.menu-bar/>

                    </div>
                </div>

                <x-slot:title1>
                    <h1 class="text-6xl text-accent bold">Daesuite</h1>
                </x-slot:title1>
                <x-slot:title2>
                    <h1 class="text-4xl text-primary bold">The Multipurpose ERP</h1>
                </x-slot:title2>
                
                

                <x-slot:description>
                    Self hosted ERP with perpetual license. Giving you complete control of your business process and data. 
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