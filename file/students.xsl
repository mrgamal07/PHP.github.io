<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="html" indent="yes"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Student Information</title>
      </head>
      <body>
        <h2>Student Information</h2>
        <table border="1" cellpadding="5">
          <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Marks</th>
          </tr>
          <xsl:for-each select="Students/Student">
            <tr>
              <td><xsl:value-of select="Name"/></td>
              <td><xsl:value-of select="RollNumber"/></td>
              <td><xsl:value-of select="Marks"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
