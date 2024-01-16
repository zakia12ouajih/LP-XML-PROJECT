<?xml version="1.0" encoding="UTF-8"?>

<!-- xslt/example.xslt -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
   
      <html>
         <body>
            
            <h2>Items List</h2>
            <table  class="table table-hover table-bordered mt-3 ">
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
                        <xsl:value-of select="role"/>
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
                        <button class="btn btn-primary"> modifier</button>
                     </td>
                  </tr>
               </xsl:for-each>
            </table>
         </body>
      </html>
   </xsl:template>
</xsl:stylesheet>