@php
$isFullScreen = false;
if (url()->current() === route('wish')) {
 $isFullScreen =true;
}
@endphp

<section>
    <div @class(['grid w-full grid-cols-1 gap-x-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5','xl:grid-cols-3'=>$isFullScreen])>
            {{$slot}}
    </div>
</section>


