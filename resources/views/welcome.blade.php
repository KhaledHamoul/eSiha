@include('layout.top')
@include('layout.header')

<<<<<<< HEAD
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
||||||| merged common ancestors
@if($teypeUser == "medecin")
 @include('layout.aside_menu_medecin')
 
@elseif($teypeUser == "labo")
=======
@if($typeUser == "medecin")
 @include('layout.aside_menu_medecin')

@elseif($typeUser == "labo")
>>>>>>> 2b488110159800e218ad1b7df98ceb75ffc8f561
  @include('layout.aside_menu_labo')
  @include('layout.labo_page_content')
@else
 @include('layout.aside_menu_clinique')
@endif




@include('layout.footer')
