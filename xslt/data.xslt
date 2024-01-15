<?xml version="1.0" encoding="UTF-8"?>

<!-- xslt/example.xslt -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
      <html>
         <body>
            <h2>Items List</h2>
            <table border="1">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
               </tr>
               <xsl:for-each select="est-safi/adminApp">
                  <tr>
                     <td>
                        <xsl:value-of select="nom" />
                     </td>
                     <td>
                        <xsl:value-of select="email" />
                     </td>
                     <td>
                        <xsl:value-of select="password" />
                     </td>
                  </tr>
               </xsl:for-each>
            </table>
         </body>
      </html>
   </xsl:template>
</xsl:stylesheet>