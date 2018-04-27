@include('layout.top')
@include('layout.header')

@if($teypeUser == "medecin")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_page_content')
@elseif($teypeUser == "medecin-dash")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_page_content')
@elseif($teypeUser == "medecin-profile")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_profile_page')
  @elseif($teypeUser == "medecin-notification")
  @include('layout.aside_menu_medecin')
  @include('layout.medecin_notification_page')
@elseif($teypeUser == "labo")
  @include('layout.aside_menu_labo')
  @include('layout.labo_page_content')
@else 
 @include('layout.aside_menu_clinique')
@endif




@include('layout.footer')

