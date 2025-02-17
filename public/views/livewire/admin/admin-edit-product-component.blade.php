<div>
    <div class="container" style="padding: 30px 0;">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                       <div class="col-md-6">
                         Modifier produit
                       </div>
                       <div class="col-md-6"> 
                           <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tout les Produits</a>
                       </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       @if(Session::has('message'))
                       <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                       @endif
                       <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Nom du produit</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />
                                   @error('name') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>
                           

                           <div class="form-group">
                               <label class="col-md-4 control-label">Produit Slug</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
                                   @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>
                           
                           
                           <div class="form-group">
                               <label class="col-md-4 control-label">courte Description</label>
                               <div class="col-md-4"wire:ignore>
                                   <textarea class="form-control" id="short_description" placeholder="Short description" wire:model="short_description"></textarea>
                                   @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Description</label>
                               <div class="col-md-4" wire:ignore>
                                   <textarea class="form-control" id="description" placeholder="Description" wire:model="description"></textarea>
                                   @error('description') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Prix Habituel</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Regular price" class="form-control input-md" wire:model="regular_price"/>
                                   @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Prix de Vente</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Sale price" class="form-control input-md" wire:model="sale_price"/>
                                   @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                   @error('SKU') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Stock</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="stock_status">
                                       <option value="instock">En Stock</option>
                                       <option value="outofstock">Plus en Stock</option>

                                   </select>
                                   @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">En Vedette</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="featured">
                                       <option value="0">Non</option>
                                       <option value="1">Oui</option>
                                   </select>
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label">Quantité</label>
                               <div class="col-md-4">
                                   <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                   @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-md-4 control-label" >Image du produit</label>
                               <div class="col-md-4">
                                   <input type="file"  class="input-file"wire:model="newimage"/>
                                   @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                   @if($newimage)
                                   <img src="{{$newimage->temporaryUrl()}}" width="120"/>
                                   @else
                                   <img src="{{asset('assets/images/products')}}/{{$image}}" width="120"/>

                                   @endif
                               </div>
                           </div>


                           <div class="form-group">
                               <label class="col-md-4 control-label">Categorie</label>
                               <div class="col-md-4">
                                   <select class="form-control" wire:model="category_id">
                                       <option value="">Selectionner Category</option>
                                       @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           

                           <div class="form-group">
                               <label class="col-md-4 control-label"></label>
                               <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Mettre à jour</button>
                               </div>
                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#short_description',
                setup:function(editor)
                {
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var $d_data =$('#short_description').val();
                        @this.set('short_description', $d_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor)
                {
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data =$('#description').val();
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush