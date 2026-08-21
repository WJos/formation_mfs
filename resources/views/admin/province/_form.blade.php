<div class="card-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="required-asterisk">Nom </label>
                <input type="text" name="nom" value="{{ old('nom', $province->nom ?? '') }}"
                    class="form-control @error('nom') is-invalid @enderror" required>
                @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
    </div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
    <button type="submit" class="btn btn-primary">Enregister</button>
</div>
