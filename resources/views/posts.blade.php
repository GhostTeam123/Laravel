<x-layout>
        @include ('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            
        <!-- var_dump("$posts->first()");     -->
        <!-- <x-post-featured-card :post="$posts->first()" />     -->
        <x-post-featured-card :post="$posts[0]"/>
            
            <!-- <div class="lg:grid lg:grid-cols-2">
                
                   
                <x-post-card:post="$posts[2]"/>
                

            </div> -->

            
            <!-- <div class="lg:grid lg:grid-cols-2">
                <x-post-card :post="$posts[0]"/>
                <x-post-card/> 
            </div> -->

            <!-- <div class="lg:grid lg:grid-cols-3">
                <x-post-card :post="$posts->first()"/>
                <x-post-card/>
                <x-post-card/>  
            </div> -->
        </main>

</x-layout>