<div class="card-body">
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                   <label class="required-asterisk">Nom</label>
                   <input type="text" name="nom" value="{{ old('nom', $produit->nom ?? '') }}"
                       class="form-control @error('nom') is-invalid @enderror" required>
                       @error('nom')
                       <div class="text-danger">
                           {{ $message }}
                       </div>
                   @enderror

               </div>
           </div>
           <div class="col-sm-6">
               <div class="form-group">
                   <label class="required-asterisk">Prix</label>
                   <input type="text" name="prix" value="{{ old('prix', $produit->prix ?? '') }}" class="form-control @error('prix') is-invalid @enderror" required>
                   @error('prix')
                       <div class="text-danger">
                           {{ $message }}
                       </div>
                   @enderror

                </div>
           </div>
           <div class="col-sm-6">
               <div class="form-group">
                   <label class="required-asterisk">Quantité</label>
                   <input type="text" name="quantite" value="{{ old('quantite', $produit->quantite ?? '') }}" class="form-control @error('quantite') is-invalid @enderror" required>
                   @error('quantite')
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
       <button type="submit" class="btn btn-primary">Enregister</button>
   </div>




