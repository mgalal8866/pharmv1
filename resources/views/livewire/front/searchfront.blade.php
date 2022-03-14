
<div >

    <div class="search-header">
        <form>
            @csrf
            <input  wire:model="query" class="text-right" placeholder=" بحث عن منتج">
            <button class="color_dark tr_all color_lbrown_hover"><i class="fa fa-search d_inline_m"></i></button>
            {{-- <button class=""><i class="uil uil-search"></i>اضغط للبحث</button> --}}
        </form>
        <div wire:loading style="position: relative;"   class="dropdown bg_grey_light  animated fadeInUp visible">
            <div class="list-item">Searching...</div>
        </div>
    </div>
            @if(!empty($query))
                <div style="position: relative;" class="dropdown bg_grey_light  animated fadeInUp visible">
                        <div class="search-by-cat" >
                            @foreach($products as  $contact)
                            <div class="dvsearch">
                                    <a href="#" class="single-cat">
                                    {{-- <div class="icon"><img src="{{(isset($contact['product_image'][0]['image']))?$contact['product_image'][0]['image']:asset('assets/images/product/noimage.jpg')}}" alt=""></div> --}}
                                    <div class="text">{{$contact['name']}}</div>
                                    </a>
                                <form wire:submit.prevent="store( {{$contact['id']}} , '{{$contact['name']}}' , {{$contact['price']}})" >
                                    @csrf
                                    <button class="btn btn-primary" type="submit"><i class="uil uil-shopping-cart-alt uil-lg"></i></button>
                                </form>

                            </div>
                            <hr>
                            @endforeach
                        </div>
                        <center>
                        <div>
                            {!! $products->links('livewire.pag')  !!}
                        </div>
                    </center>
                </div>
             @endif
</div>



@push('scripts')
{{-- <script>
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById('searchBar').style.top = '-50px';
      } else {
        document.getElementById('searchBar').style.top = '0';
      }
      prevScrollpos = currentScrollPos;
    }
    </script> --}}


@endpush
