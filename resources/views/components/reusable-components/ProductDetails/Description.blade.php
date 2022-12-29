
@props(['title','description'])

    <section class="px-2 py-2 font-normal leading-8 tracking-wider">
        <h1 class="my-2 block text-xl font-semibold tracking-wider md:hidden">
           {{$title}}
        </h1>
        <p class="break-words first-letter:uppercase">{{$description}}</p>
    </section>



