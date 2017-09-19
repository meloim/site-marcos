<?php include 'principal.php'?>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    
    
    <div class="main">
      <div class="container">
      
        <div class="row margin-bottom-40">
          
          <div class="col-md-12 col-sm-7">
            <h1>Contato</h1>
            <div class="content-form-page">
              <form role="form" class="form-horizontal form-without-legend">
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="first-name">Nome <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" id="first-name" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="email">E-Mail <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" id="email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="telephone">Telefone <span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" id="telephone" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="first-name">Assunto<span class="require">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" id="assunto" class="form-control">
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="message">Mensagem</label>
                  <div class="col-lg-8">
                    <textarea class="form-control" rows="6"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>



<?php include 'footer.php'?>