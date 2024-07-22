<div>


    @switch( $selected_page)
           @case(1)
            <livewire:front-end.welcome />
            @break

            @case(2)
            <livewire:front-end.products />
           @break

        @default

    @endswitch


</div>
