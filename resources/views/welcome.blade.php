@include('layout.top')
@include('layout.header')


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
  
@endif




@include('layout.footer')
