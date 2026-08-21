                   <div class="card-body">
                       <div class="row">
                           <div class="col-sm-4">
                               <div class="form-group">
                                   <label class="required-asterisk">Nom </label>


                                   <input type="text" name="nom" value="{{ old('nom', $region->nom ?? '') }}"
                                       class="form-control @error('nom') is-invalid @enderror" required>
                                   @error('nom')
                                       <div class="text-danger">
                                           {{ $message }}
                                       </div>
                                   @enderror


                               </div>
                           </div>
                           <div class="col-sm-4">
                               <div class="form-group">
                                   <label class="required-asterisk">chef lieu </label>
                                   <input type="text" name="chef_lieu"
                                       value="{{ old('chef_lieu', $region->chef_lieu ?? '') }}"
                                       class="form-control @error('chef_lieu') is-invalid @enderror" required>
                                   @error('chef_lieu')
                                       <div class="text-danger">
                                           {{ $message }}
                                       </div>
                                   @enderror
                               </div>
                           </div>

                           <div class="col-sm-4">
                               <div class="form-group">
                                   <label class="required-asterisk">Superficie</label>
                                   <input type="int" name="superficie"
                                       value="{{ old('superficie', $region->superficie ?? '') }}"
                                       class="form-control @error('superficie') is-invalid @enderror" required>
                                   @error('superficie')
                                       <div class="text-danger">
                                           {{ $message }}
                                       </div>
                                   @enderror
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                       <button type="submit" class="btn btn-primary">Enregistrer</button>
                   </div>
