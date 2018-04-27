@include('layout.top')
@include('layout.header')

@if($teypeUser == "medecin")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_page_content')
@elseif($teypeUser == "labo")
  @include('layout.aside_menu_labo')
  @include('layout.labo_page_content')
@else 
 @include('layout.aside_menu_clinique')
@endif




@include('layout.footer')

