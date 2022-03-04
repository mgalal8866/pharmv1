<div >
    <form role="search" class="relative db_xs_centered button_in_input">
        <input type="text" wire:model="query" name="" tabindex="1" placeholder="{{ __('tran.search') }}" class="fs_medium color_light fw_light w_full tr_all">
        <button class="color_dark tr_all color_lbrown_hover"><i class="fa fa-search d_inline_m"></i></button>
    </form>
{{--
    <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        <div class="list-item">Searching...</div>
    </div> --}}
    <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        <div class="list-item">Searching...</div>
    </div>

    @if(!empty($query))
        <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div>

        <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
            @if(!empty($products))
                @foreach($products as  $contact)
                    {{-- <a
                        href="#"
                        class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                    >{{ $contact->name}}</a> --}}
                    <a href="#" class="list-item {{ $highlightIndex === $loop->index ? 'highlight' : '' }}" >
                        {{ $contact->name }}</a>
                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
        <div class="px-4 mt-4">
            {{-- {{$products->links()}} --}}
        </div>
    @endif




</div>



