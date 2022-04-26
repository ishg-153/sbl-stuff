<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>My Student Information</h2>
<table border="1">
<tr>
<th style="text-align:left">RollNo</th>
<th style="text-align:left">Name</th>
<th style="text-align:left">Class</th>
</tr>
<xsl:for-each select="student">
<tr>
<td><xsl:value-of select="roll"/></td>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="class"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>