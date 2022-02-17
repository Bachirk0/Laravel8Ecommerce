<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class=" panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-md-6">
                              Ajouter un Coupon
                          </div>
                          <div class="col-md-6">
                              <a href="{{route('admin.coupons')}}" class ="btn btn-success pull-right">Tout les Coupons</a>
                          </div>
                      </div>
                  </div>
                  <div class="panel-body">
                      @if(Session::has('message')) 
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                          @endif
                      <form class="form-horizontal" wire:submit.prevent="storeCoupon"> 
                          <div class="form-group">
                              <label class="col-md-4 control-label"> Code coupon</label>
                          <div class="col-md-4">
                          <input type="text" placeholder="Coupon code" class="form-control input-md"wire:model="code" />
                          @error('code') <p class="text-danger">{{$message}}</p> @enderror
                          </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Type de coupon</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="type">
                                    <option value="">   T</option>
                                    <option value="fixed">montant</option>
                                    <option value="percent">Pour cent</option>
                                </select>
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                              </div>
    
                            <div class="form-group">
                              <label class="col-md-4 control-label">Valeur du coupon</label>
                          <div class="col-md-4">
                          <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value"/>
                          @error('value') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Valeur du panier </label>
                            <div class="col-md-4">
                            <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value"/>
                            @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                          </div>
                              </div>


                              <div class="form-group">
                                <label class="col-md-4 control-label"> Date d'expiration</label>
                            <div class="col-md-4" wire:ignore>
                            <input type="expiry_date" id="expiry-date" placeholder="Expiry Date" class="form-control input-md" wire:model="expiry_date"/>
                            @error('') <p class="text-danger">{{$message}}</p> @enderror
                          </div>
                              </div>
    
                            <div class="form-group">
                              <label class="col-md-4 control-label"></label>
                          <div class="col-md-4">
                          <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                            </div>
                     </form>
                      </div>
                  </div>
              </div>
        </div>
        </div>                
    
    </div>
    </div>          
    
    @push('scripts')
        <script>
            $(function(){
                $('#expiry-date').datetimepicker({
                    format: 'Y-MM-DD'
                })
                 .on('dp.change', function(ev){
                     var data= $('#expiry-date').val();
                     @this.set('expiry_date',data);
                 });
            });
        </script>
    @endpush
    