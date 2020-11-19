
<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static" >
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <form id="form-contact" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}
           

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>
            

                <div class="modal-body">
                    <div class="row no-gutters">
                        <!----------- left side------------->
                        <div class="col no-gutters">
                            <div class="liftside">
                                <input type="hidden" id="id" name="id">
                                <div class="form-group">
                                    <label for="civilité" class="col-md-3 control-label">Civilité</label>
                                    <div class="col-md-6">
                                        <input type="text" id="civilité" name="civilité" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="prénom" class="col-md-3 control-label">Prénom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="prénom" name="prénom" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nom" class="col-md-3 control-label">Nom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nom" name="nom" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fonction" class="col-md-3 control-label">Fonction</label>
                                    <div class="col-md-6">
                                        <input type="text" id="fonction" name="fonction" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="téléphone" class="col-md-3 control-label">Téléphone</label>
                                    <div class="col-md-6">
                                        <input type="text" id="téléphone" name="téléphone" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_naissance" class="col-md-3 control-label">Date de naissance</label>
                                    <div class="col-md-6">
                                        <input type="text" id="date_naissance" name="date_naissance" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="e-mail" class="col-md-3 control-label">E-mail</label>
                                  <div class="col-md-6">
                                      <input type="email" id="email" name="email" class="form-control" required>
                                      <span class="help-block with-errors"></span>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="société_id" class="col-md-3 control-label">Société</label>
                                    <div class="col-md-6">
                                        <input type="text" id="société_id" name="société_id" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ville" class="col-md-3 control-label">Ville</label>
                                    <div class="col-md-6">
                                        <input type="text" id="ville" name="ville" class="form-control" autofocus required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>                                
                            </div>

                        </div>
                        <!----------- /left side------------->
                        <!----------- right side------------->
                        <div class="col no-gutters">
                            <div class="rightside">
                                
                            </div>
                        </div>
                        <!----------- /right side------------->
                    </div>
             </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>   
    </div>
</div>
