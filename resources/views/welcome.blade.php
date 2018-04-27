@include('layout.top')
@include('layout.header')


@if($typeUser == "medecin")
 @include('layout.aside_menu_medecin')

@elseif($typeUser == "labo")

  @include('layout.aside_menu_labo')
  @include('layout.labo_page_content')
@else
 @include('layout.aside_menu_clinique')
@endif




@include('layout.footer')
