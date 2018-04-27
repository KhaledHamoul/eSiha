@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('S\'inscire') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                          <br/>
                        <div class="form-group row md-part1">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row md-part1">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row md-part1">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row md-part2">
                          <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                          <div class="col-md-6">
                              <input id="nom" type="text" class="form-control" name="Ex: BATOUCHE" required>
                          </div>
                        </div>
                        <div class="form-group row md-part2">
                          <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                          <div class="col-md-6">
                              <input id="prenom" type="text" class="form-control" name="Ex: Oussama" required>
                          </div>
                        </div>

                        <div class="form-group row md-part2">
                          <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                          <div class="col-md-6">
                              <input id="adresse" type="text" class="form-control" name="Ex: 23 rue ahemd ben bella -beraki ALGER-" required>
                          </div>
                        </div>

                        <div class="form-group row md-part2">
                          <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Specialité') }}</label>

                          <div class="col-md-6">
                              <select class="form-control" name="">
                                 <option value="" selected disabled>Selectionner</option>
                                 <option value="">Dantiste</option>
                                 <option value="">Neurologue</option>
                                 <option value="">Pediatre</option>
                                 <option value="">Autre</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row md-part2">
                          <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('J\'accept les déplacement à domicile en cas d\'urgence.') }}</label>

                          <div class="col-md-6">
                              <select class="form-control" name="">
                                 <option value="" selected disabled>Selectionner</option>
                                 <option value="">Oui</option>
                                 <option value="">Non</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group row org-part2">
                          <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                          <div class="col-md-6">
                              <input id="nom" type="text" class="form-control" name="Ex: CLINIQUE KARDIA" required>
                          </div>
                        </div>
                        <div class="form-group row org-part2">
                          <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                          <div class="col-md-6">
                              <input id="prenom" type="text" class="form-control" name="Ex: ..." required>
                          </div>
                        </div>
                        <div class="form-group row org-part2">
                          <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Service') }}</label>

                          <div class="col-md-6">
                              <select class="form-control" name="">
                                 <option value="" selected disabled>Selectionner</option>
                                 <option value="">Dantiste</option>
                                 <option value="">Neurologue</option>
                                 <option value="">Pediatre</option>
                                 <option value="">Autre</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row org-part2">
                          <label for="" class="col-md-4 col-form-label text-md-right">Description</label>
                          <div class="col-md-6">
                            <textarea name="name" rows="6" class="textarea form-control" ></textarea>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <div class="button-list">
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-primary" id="b1" onclick="medecin()">Medecin</button>
                                      <button type="button" class="btn btn-primary" id="b2" onclick="org()">Organisme</button>
                                  </div>
                              </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/lib/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(".md-part2").hide();
  $(".org-part2").hide();
$(document).ready(function(){
  medecin = function(){
    if ($("#b1").html()=='Medecin') {
      $("#b1").html('Precedent');
      $("#b2").html('Terminer');
      $(".md-part1").hide();
      $(".md-part2").show();
    }else{
      $("#b1").html('Medecin');
      $("#b2").html('Organisme');
      $(".md-part2").hide();
      $(".md-part1").show();
      $(".org-part2").hide();
    }

  };

 org = function(){
   if ($("#b2").html()=='Organisme') {
     $("#b1").html('Precedent');
     $("#b2").html('Terminer');
     $(".md-part1").hide();
     $(".org-part2").show();
   }
 };

});

</script>
@endsection
