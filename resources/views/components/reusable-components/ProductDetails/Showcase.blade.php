 @props(['description'])
    <section
         class="relative hidden w-full bg-slate-800 px-3 py-2 text-white md:block md:px-10 md:py-12 xl:px-36 xl:py-24">
         <div class="w-full space-y-6 md:w-3/5">
              <h1 class="text-lg font-bold leading-[38px] tracking-wider md:text-2xl xl:text-4xl">
                   {{$description->title}}
              </h1>
              <h3 class="text-sm font-medium leading-7 tracking-wide md:text-base xl:text-xl">
                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus eaque repudiandae eveniet!
              </h3>
              <div class="space-x-2 text-yellow-500">
                   <span>4.8</span>
                   <div class="inline">
                        <span
                             ****
                        </span>
                   </div>
                   <span class="tracking-wider">(75214)</span>
              </div>
              <h4 class="font-bold capitalize tracking-widest">
                   <span class="font-normal tracking-tight">Category :</span>
                   {{$description->category}}
              </h4>
         </div>

    </section>



