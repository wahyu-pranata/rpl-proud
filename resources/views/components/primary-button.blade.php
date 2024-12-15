@props(['type' => 'button'])
<div class="flex justify-center items-center my-[1em]">
    <button type={{$type}} class="shadow-none outline-none w-fit h-fit border-2 border-solid border-dark-blue py-[0.5em] px-[1em] bg-dark-blue rounded-lg text-light-primary text-base font-semibold hover:bg-transparent hover:text-dark-blue active:bg-transparent active:border-transparent active:text-dark-blue">
        {{$slot}}
    </button>
</div>
