<div class="card-body">
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                   <label class="required-asterisk">Nom </label>
                   <input type="text" name="Nom" value="{{ old('Nom', $lepays->Nom ?? '') }}"
                       @error('Nom')
                       <div class="text-danger">
                           {{ $message }}
                       </div>
                   @enderror

               </div>
           </div>
           
          <div class="col-sm-6">
    <div class="form-group">
        <label class="required-asterisk">Iso2</label>
        <input type="text"
               name="Iso2"
               value="{{ old('Iso2', $lepays->Iso2 ?? '') }}"
               class="form-control @error('Iso2') is-invalid @enderror"
               required>
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group">
        <label class="required-asterisk">Iso3</label>
        <input type="text"
               name="Iso3"
               value="{{ old('Iso3', $lepays->Iso3 ?? '') }}"
               class="form-control @error('Iso3') is-invalid @enderror"
               required>
    </div>
</div>
   </div>
   <div class="modal-footer justify-content-between">
       <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
       <button type="submit" class="btn btn-primary">Enregister</button>
   </div>
