<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
      <html>
         <body>
            <h2>Liste Administration</h2>
            <table class="table table-hover table-bordered mt-3 ">
               <thead>
                  <tr class="px-2">
                     <th>Role</th>
                     <th>ID</th>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Email</th>
                     <th>Password</th>
                     <th>Modifier</th>
                  </tr>
               </thead>
               <xsl:for-each select="est-safi/adminEcole/directeur-generale">
                  <tr>
                     <td>
                        <xsl:value-of select="role" />
                     </td>
                     <td>
                        <xsl:value-of select="@idDirecteur-generale" />
                     </td>
                     <td>
                        <xsl:value-of select="nom" />
                     </td>
                     <td>
                        <xsl:value-of select="prenom" />
                     </td>
                     <td>
                        <xsl:value-of select="email" />
                     </td>
                     <td>
                        <xsl:value-of select="password" />
                     </td>
                     <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                           data-bs-target="#edit_{@idDirecteur-generale}">
                           <span class="glyphicon glyphicon-edit"></span> Edit </button>
                     </td>
                     
                  </tr>
               </xsl:for-each>
               <xsl:for-each select="est-safi/adminEcole/directeur-adjoint">
                  <tr>
                     <td>
                        <xsl:value-of select="role" />
                     </td>
                     <td>
                        <xsl:value-of select="@idDirecteur-adjoint" />
                     </td>
                     <td>
                        <xsl:value-of select="nom" />
                     </td>
                     <td>
                        <xsl:value-of select="prenom" />
                     </td>
                     <td>
                        <xsl:value-of select="email" />
                     </td>
                     <td>
                        <xsl:value-of select="password" />
                     </td>
                     <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                           data-bs-target="#edit_{@idDirecteur-adjoint}">
                           <span class="glyphicon glyphicon-edit"></span> Edit </button>
                     </td>
                  </tr>
               </xsl:for-each>
               <xsl:for-each select="est-safi/adminEcole/chef-departement">
                  <tr>
                     <td>
                        <xsl:value-of select="role" />
                     </td>
                     <td>
                        <xsl:value-of select="@idChef-departement" />
                     </td>
                     <td>
                        <xsl:value-of select="nom" />
                     </td>
                     <td>
                        <xsl:value-of select="prenom" />
                     </td>
                     <td>
                        <xsl:value-of select="email" />
                     </td>
                     <td>
                        <xsl:value-of select="password" />
                     </td>
                     <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                           data-bs-target="#edit_{@idChef-departement}">
                           <span class="glyphicon glyphicon-edit"></span> Edit </button>
                     </td>
                  </tr>
               </xsl:for-each>
               <xsl:for-each select="est-safi/adminEcole/chef-scolarite">
                  <tr>
                     <td>
                        <xsl:value-of select="role" />
                     </td>
                     <td>
                        <xsl:value-of select="@idChef-scolarite" />
                     </td>
                     <td>
                        <xsl:value-of select="nom" />
                     </td>
                     <td>
                        <xsl:value-of select="prenom" />
                     </td>
                     <td>
                        <xsl:value-of select="email" />
                     </td>
                     <td>
                        <xsl:value-of select="password" />
                     </td>
                     <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                           data-bs-target="#edit_{@idChef-scolarite}">
                           <span class="glyphicon glyphicon-edit"></span> Edit </button>
                     </td>
                  </tr>
               </xsl:for-each>
            </table>

            <!-- Add New -->
            <!-- Add New -->
            


            <!-- ////////////////////////////////////modal directeur generale///////////////////////////////////////////////////// -->

            <!-- Modals -->
            <xsl:for-each select="est-safi/adminEcole/directeur-generale">
               <div class="modal fade" id="edit_{@idDirecteur-generale}" tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <!-- Modal content here -->
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h6 class="modal-title" id="exampleModalLabel">Edit Membere</h6>
                           <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form method="POST"
                              action="/LP-XML-PROJECT/public/admin/homeAdmin/administration/updateDG">
                              <h6>ID: <xsl:value-of select="@idDirecteur-generale" /></h6>
                              <div class="modal-body">
                                 <input type="hidden" name="id" value="{@idDirecteur-generale}" />
                                 <label for="nom">Nom:</label>
                                 <input type="text" name="nom" value="{nom}" class="form-control" />

                                 <label for="prenom">Prenom:</label>
                                 <input type="text" name="prenom" value="{prenom}"
                                    class="form-control" />

                                 <label for="tele">Tele:</label>
                                 <input type="text" name="tele" value="{tele}" class="form-control" />

                                 <label for="cin">CIN:</label>
                                 <input type="text" name="cin" value="{cin}" class="form-control" />

                                 <label for="email">Email:</label>
                                 <input type="text" name="email" value="{email}"
                                    class="form-control" />

                                 <label for="password">Password:</label>
                                 <input type="password" name="password" value="{password}"
                                    class="form-control" />

                                 <label for="role" class="col-sm-2 control-label">Role:</label>
                                 <select name="role" id="role" class="form-control"
                                    required="required">
                                    <option value="directeur-generale">directeur-generale</option>
                                    <option value="directeur-adjoint">directeur-adjoint</option>
                                    <option value="chef-departement">chef-departement</option>
                                    <option value="chef-scolarite">chef-scolarite</option>
                                 </select>

                                 <!-- Include other fields or details here -->
                                 <!-- ... -->
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


            <!-- //////////////////////// modal Directeur-adjoint/////////////////////////////////////////////////////////////////////// -->

            <xsl:for-each select="est-safi/adminEcole/directeur-adjoint">
               <div class="modal fade" id="edit_{@idDirecteur-adjoint}" tabindex="-1"
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
                              <h6>ID: <xsl:value-of select="@idDirecteur-adjoint" /></h6>
                              <div class="modal-body">
                                 <input type="hidden" name="id" value="{@idDirecteur-adjoint}" />
                                 <label for="nom">Nom:</label>
                                 <input type="text" name="nom" value="{nom}" class="form-control" />

                                 <label for="prenom">Prenom:</label>
                                 <input type="text" name="prenom" value="{prenom}"
                                    class="form-control" />

                                 <label for="tele">Tele:</label>
                                 <input type="text" name="tele" value="{tele}" class="form-control" />

                                 <label for="cin">CIN:</label>
                                 <input type="text" name="cin" value="{cin}" class="form-control" />

                                 <label for="email">Email:</label>
                                 <input type="text" name="email" value="{email}"
                                    class="form-control" />

                                 <label for="password">Password:</label>
                                 <input type="password" name="password" value="{password}"
                                    class="form-control" />

                                 <label for="role" class="col-sm-2 control-label">Role:</label>
                                 <select name="role" id="role" class="form-control"
                                    required="required">
                                    <option value="directeur-generale">directeur-generale</option>
                                    <option value="directeur-adjoint">directeur-adjoint</option>
                                    <option value="chef-departement">chef-departement</option>
                                    <option value="chef-scolarite">chef-scolarite</option>
                                 </select>

                                 <!-- Include other fields or details here -->
                                 <!-- ... -->
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

            <!-- ///////////////////// modal chef-departement//////////////////////////////////// -->
            <xsl:for-each select="est-safi/adminEcole/chef-departement">
               <div class="modal fade" id="edit_{@idChef-departement}" tabindex="-1"
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
                              
                              <h6>ID: <xsl:value-of select="@idChef-departement" /></h6>
                              <div class="modal-body">
                                 <input type="hidden" name="id" value="{@idChef-departement}" />
                                 <label for="nom">Nom:</label>
                                 <input type="text" name="nom" value="{nom}" class="form-control" />

                                 <label for="prenom">Prenom:</label>
                                 <input type="text" name="prenom" value="{prenom}"
                                    class="form-control" />

                                 <label for="tele">Tele:</label>
                                 <input type="text" name="tele" value="{tele}" class="form-control" />

                                 <label for="cin">CIN:</label>
                                 <input type="text" name="cin" value="{cin}" class="form-control" />

                                 <label for="email">Email:</label>
                                 <input type="text" name="email" value="{email}"
                                    class="form-control" />

                                 <label for="password">Password:</label>
                                 <input type="password" name="password" value="{password}"
                                    class="form-control" />

                                 <label for="role" class="col-sm-2 control-label">Role:</label>
                                 <select name="role" id="role" class="form-control"
                                    required="required">
                                    <option value="directeur-generale">directeur-generale</option>
                                    <option value="directeur-adjoint">directeur-adjoint</option>
                                    <option value="chef-departement">chef-departement</option>
                                    <option value="chef-scolarite">chef-scolarite</option>
                                 </select>

                                 <!-- Include other fields or details here -->
                                 <!-- ... -->
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


            <!-- ///////////////////// modal chef-scolarite//////////////////////////////////// -->
            <xsl:for-each select="est-safi/adminEcole/chef-scolarite">
               <div class="modal fade" id="edit_{@idChef-scolarite}" tabindex="-1"
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

                              <h6>ID: <xsl:value-of select="@idChef-scolarite" /></h6>
                              <div class="modal-body">
                                 <input type="hidden" name="id" value="{@idChef-scolarite}" />
                                 <label for="nom">Nom:</label>
                                 <input type="text" name="nom" value="{nom}" class="form-control" />

                                 <label for="prenom">Prenom:</label>
                                 <input type="text" name="prenom" value="{prenom}"
                                    class="form-control" />

                                 <label for="tele">Tele:</label>
                                 <input type="text" name="tele" value="{tele}" class="form-control" />

                                 <label for="cin">CIN:</label>
                                 <input type="text" name="cin" value="{cin}" class="form-control" />

                                 <label for="email">Email:</label>
                                 <input type="text" name="email" value="{email}"
                                    class="form-control" />

                                 <label for="password">Password:</label>
                                 <input type="password" name="password" value="{password}"
                                    class="form-control" />

                                 <label for="role" class="col-sm-2 control-label">Role:</label>
                                 <select name="role" id="role" class="form-control"
                                    required="required">
                                    <option value="directeur-generale">directeur-generale</option>
                                    <option value="directeur-adjoint">directeur-adjoint</option>
                                    <option value="chef-departement">chef-departement</option>
                                    <option value="chef-scolarite">chef-scolarite</option>
                                 </select>

                                 <!-- Include other fields or details here -->
                                 <!-- ... -->
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

         </body>
      </html>
   </xsl:template>
</xsl:stylesheet>
