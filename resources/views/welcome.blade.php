@include('layout.header')

@if($teypeUser == "medecin")
 @include('layout.aside_menu_medecin')
@elseif($teypeUser == "labo")
  @include('layout.aside_menu_labo')
@else 
 @include('layout.aside_menu_clinique')
@endif




@include('layout.footer')

