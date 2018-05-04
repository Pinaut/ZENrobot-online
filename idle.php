<?php
include('../pages/head.php');
//include('../pages/menu.php');
?>

<div class="content"><table width="1000" border="0" height="600" align="center">
  <tr>
    <th  scope="col"><br>
      <table width="800" height="500" border="0" align="center">
        <tr>
          <th width="200" scope="col"><table width="99%" height="330" border="0" align="center">
            <tr>
              <th height="300" align="left" valign="top" >ZENrobot is idle. You can choose a new pattern</th>
            </tr>
            <tr>
              <td align="left" valign="bottom">Turn on, tune in, paint out!
                <form action="http://keinkunst.ch/zen/select.php">
                  <p>
                    <select name="pattern" >
                      <option value="02" selected="selected">simple spiral</option>
                      <option value="36">shifting spiral</option>
                      <option value="28">four corners</option>
                      <option value="04">six corners</option>
                      <option value="11">eight corners</option>
                      <option value="05">spirograph</option>
                      <option value="18">helix star</option>
                      <option value="20">zigzag flower</option>
                      <option value="24">cauliflower</option>
                      <option value="16">la rose</option>
                      <option value="25">3 soft legs</option>
                      <option value="21">5 soft legs</option>
                      <option value="98">cleanup the mess</option>
                  </select>
                    <input type="submit" name="submit" value="Go!" />
                  </p>
                </form></td>
            </tr>
          </table></th>
          <th width="600" scope="col"><img src="../img/ZENrobot thumb1.jpg" width="590" height="360" border="1" align="right" /></th>
        </tr>
      </table></th>
  </tr>
</table>
</div>
