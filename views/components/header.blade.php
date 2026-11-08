
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