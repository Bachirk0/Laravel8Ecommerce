<div>
   <div class="container" style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       Changer de Mot de Passe
                   </div>
                   <div class="panel-body">
                       @if(Session::has('password_success'))
                       <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                       @endif

                       @if(Session::has('password_error'))
                       <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                       @endif

                       <form class="form-horizontal" wire:submit.prevent="changePassword">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Mot de Passe actuel </label>
                               <div class="col-md-4">
                                   <input type="password" placeholder="Mot de passe actuel" class="form-control input-md" name="current_password" wire:model="current_password" />
                                   @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                            <label class="col-md-4 control-label">Nouveau Mot de Passe </label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Nouveau Mot de passe" class="form-control input-md" name="password" wire:model="password" />
                                @error('password') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirmer le Mot de Passe</label>
                            <div class="col-md-4">
                                <input type="password" placeholder="Confirmer le Mot de passe " class="form-control input-md" name="password_confirmation" wire:model="password_confirmation" />
                                @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
