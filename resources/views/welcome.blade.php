@include('layout.header')
@include('layout.top')


@if($typeUser == "medecin")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_page_content')
@elseif($typeUser == "medecin-dash")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_page_content')
@elseif($typeUser == "medecin-profile")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_profile_page')
  @elseif($typeUser == "medecin-notification")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_notification_page')
@elseif($typeUser == "labo")
  @include('layout.aside_menu_labo')
  @include('layout.labo_page_content')
@endif




@include('layout.footer')
