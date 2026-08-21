    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="required-asterisk">Nom </label>
                    <input type="text" name="nom" value="{{ old('nom', $user->nom ?? '') }}"
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
                    <label class="required-asterisk">Prénom </label>
                    <input type="text" name="prenom" value="{{ old('prenom', $user->prenom ?? '') }}"
                        class="form-control @error('prenom') is-invalid @enderror" required>
                    @error('prenom')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label class="required-asterisk">Email </label>
                    <input type="text" name="email" value="{{ old('email', $user->email ?? '') }}"
                        class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label class="required-asterisk">Telephone </label>
                    <input type="text" name="telephone" value="{{ old('telephone', $user->telephone ?? '') }}"
                        class="form-control @error('telephone') is-invalid @enderror" required>
                    @error('telephone')
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
