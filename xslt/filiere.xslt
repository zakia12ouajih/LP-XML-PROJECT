<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>

<h2>Liste Filiere</h2>

<table class="table table-hover table-bordered mt-3 ">
<thead>
   <tr class="px-2">
      <th>Id Filiere</th>
      <th>Ref Depatement</th>
      <th>Nom Filiere</th>
      <th>Modifier</th>
   </tr>
</thead>
<xsl:for-each select="est-safi/filieres/filiere">
   <tr>
      <td>
                        <xsl:value-of select="@idFiliere" />
      </td>
      <td>
                        <xsl:value-of select="@refDepatement" />
      </td>
      <td>
                        <xsl:value-of select="nomFiliere" />
      </td>
      
      <td>
         <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
            data-bs-target="#edit_{@idFiliere}">
            <span class="glyphicon glyphicon-edit"></span> Edit </button>
         
            <button type="button" class="btn btn-danger btn-sm mx-2" data-bs-toggle="modal"
                           data-bs-target="#delete_{@idFiliere}">
                           <span class="glyphicon glyphicon-edit"></span> delete </button>
      </td>
   </tr>
</xsl:for-each>
<xsl:for-each select="est-safi/filieres/filiere">
                  <div class="modal fade" id="edit_{@idFiliere}" tabindex="-1"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                     <!-- Modal content here -->
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h6 class="modal-title" id="exampleModalLabel">Edit Member</h6>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                 aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form method="POST"
                                 action="/LP-XML-PROJECT/public/admin/homeAdmin/administration/updateDG">

                                 <div class="modal-body">
                                    <input type="hidden" name="id" value="{@idChef-scolarite}" />
                                    

                                    
                                    <label for="cin">CIN:</label>
                                    <input type="text" name="cin" value="{cin}" class="form-control" />
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                       data-bs-dismiss="modal">
                                       Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </xsl:for-each>

               <!-- Delete -->
               <div class="modal fade" id="delete_{@idFiliere}" tabindex="-1"
                  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           
                           <center>
                              <h4 class="modal-title" id="myModalLabel">Delete Member</h4>
                           </center>
                        </div>
                        <div class="modal-body">
                           <p class="text-center">Are you sure you want to Delete</p>
                           <h2 class="text-center">
                              <?php echo $row->firstname.' '.$row->lastname;?>
                           </h2>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                 class="glyphicon glyphicon-remove"></span> Cancel</button>
                           <a href="delete.php?id={@idFiliere}" class="btn btn-danger"><span
                                 class="glyphicon glyphicon-trash"></span> Yes</a>
                        </div>

                     </div>
                  </div>
               </div>
</table>
</body>
   </html>
   </xsl:template>
</xsl:stylesheet>