<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Student Details</h2>
<table border="1">
<xsl:for-each select="studentdata/student">
<tr bgcolor="#CCCCFF">
<td align="left">REGISTRATION NUMBER</td>
<td><xsl:value-of select="REG"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">FIRST NAME </td>
<td><xsl:value-of select="FIRSTNAME"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">LAST NAME </td>
<td><xsl:value-of select="LASTNAME"/></td>
</tr>
<tr bgcolor="#CCCCFF" >
<td align="left">DEGREE </td>
<td><xsl:value-of select="DEGREE"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">ADMISSION YEAR </td>
<td><xsl:value-of select="CURRENTYEAR"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">CGPA </td>
<td><xsl:value-of select="CGPA"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">INTEREST </td>
<td><xsl:value-of select="INTEREST"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">HOBBIES </td>
<td><xsl:value-of select="HOBBIES"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">EVENTS ATTENDED </td>
</tr><tr bgcolor="#FFCCFF">
<td align="left">1 </td>
<td><xsl:value-of select="EVENTS/ONE"/></td>
</tr>
<tr bgcolor="#FFCCFF">
<td align="left">2 </td>
<td><xsl:value-of select="EVENTS/TWO"/></td>
</tr>
<tr bgcolor="#FFCCFF">
<td align="left">3 </td>
<td><xsl:value-of select="EVENTS/THREE"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">ADDRESS </td>
</tr><tr bgcolor="#FFCCFF">
<td align="left">Room Num: </td>
<td><xsl:value-of select="ADDRESS/DNO"/></td>
</tr>
<tr bgcolor="#FFCCFF">
<td align="left">Block: </td>
<td><xsl:value-of select="ADDRESS/BLOCK"/></td>
</tr>
<tr bgcolor="#FFCCFF">
<td align="left">Campus: </td>
<td><xsl:value-of select="ADDRESS/AREA"/></td>
</tr>
<tr bgcolor="#CCCCFF">
<td align="left">EMAIL </td>
<td><xsl:value-of select="EMAIL"/></td>
</tr><tr bgcolor="#CCCCFF">
<td align="left">MOBILE </td>
<td><xsl:value-of select="MOBILE"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>