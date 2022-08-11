<div class="modal1" >
  
  <!-- The Modal -->
  <div class="modal  fade  bd-example-modal-xl" id="myModala">
    <div class="modal-dialog ">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AGREGAR USUARIOS</h4>
          
          <button type="button" class=" btn btn-close btn-danger" data-bs-dismiss="modal" ></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post">
                                
                  
                        
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresar cuenta de usuario</h5>
              
                                <div class="form-outline mb-4">
                                  <input type="text" name="name" placeholder="usuario" class="form-control form-control-lg" />
                                  <label class="form-label">Usuario</label>
                                </div>
              
                                <div class="form-outline mb-4">
                                  <input type="text" name="contraseña" placeholder="contraseña" class="form-control form-control-lg" />
                                  <label class="form-label" >Contraseña</label>
                                  <br>
                                  
                                </div>
                                
                               
                                
                                    
                                    <select name="tipo" type="text"  class="form-select" aria-label="Default select example">
                                <option value="0" style="display:none;"><label>Seleccionar</label></option>
                                <option value="local">local</option>
                                <option value="admin">admin</option>
                                </select>
<hr>
                                <div  class="">
                                <input type="submit" name="register"   class="btn btn-dark  btn-block" >
                                    
                                    <input type="reset" class="btn btn-warning  btn-block" >
                                </div>
              
                            
                              </form>
        <?php 
        include("registrar.php");
        ?>
    
</div>
</div>
 

