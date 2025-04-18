<x-layout>
    
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">

            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->title }}</h1>

            <div class="flex flex-col gap-2">
               <x-lessons.player />

               <x-lessons.buttons :$lesson/> 

            </div>
            
            
        </div>
    </section>
    
    

</x-layout>